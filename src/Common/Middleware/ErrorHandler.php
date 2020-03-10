<?php

namespace BitmovinApiSdk\Common\Middleware;

use BitmovinApiSdk\Common\BitmovinApiException;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Models\Link;
use BitmovinApiSdk\Models\Message;
use BitmovinApiSdk\Models\ResponseError;
use Closure;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ErrorHandler
{
    /**
     * Add error handling to Guzzle client
     * @param callable $handler
     * @return Closure
     */
    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            // Request Body is weirdly being removed after the request has been called
            // Thus saving the content before calling the request
            $requestBody = $request->getBody();

            $promise = $handler($request, $options);

            return $promise->then(function (ResponseInterface $response) use ($request, $requestBody, $handler, $options) {
                $request->getBody()->rewind();

                // Return response if the http call was successful
                if ($response->getStatusCode() < 400) {
                    $responseBody = $response->getBody()->getContents();
                    json_decode($responseBody);

                    if ($responseBody === "" || json_last_error() === JSON_ERROR_NONE) {
                        return $response;
                    }
                }

                throw $this->constructBitmovinApiException($request, $response, $requestBody->getContents());
            }, function (RequestException $ex) use ($request, $requestBody) {
                throw $this->constructBitmovinApiExceptionWithRequestException($request, $requestBody->getContents(), $ex);
            });
        };
    }

    /**
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param string $content
     * @return  BitmovinApiException
     */
    private function constructBitmovinApiException(RequestInterface $request, ResponseInterface $response, string $content): BitmovinApiException
    {
        $responseBody = $response->getBody()->getContents();
        $responseError = $this->deserializeResponse(json_decode($responseBody));

        $message = $this->constructMessage($responseError) ?? "";

        $data = $responseError->data ?? null;

        if ($data !== null) {
            if ($data->code !== null) {
                $message .= "errorCode: " . $data->code . PHP_EOL;
            }
            if (count($data->details) > 0) {
                $message .= "details:" . PHP_EOL;
                $message .= $this->constructDetails($data->details);
            }
            if (count($data->links) > 0) {
                $message .= "links:" . PHP_EOL;
                $message .= $this->constructLinks($data->links);
            }
        }

        $message .= "request:" . PHP_EOL;
        $message .= $this->constructRequestMessage($request, $content);

        $message .= "response:" . PHP_EOL;
        $message .= $this->constructResponseMessage($responseBody, $response);

        return new BitmovinApiException($message, $response->getStatusCode(), $responseError);
    }

    /**
     * @param Message[] $details
     * @return string
     */
    private function constructDetails(array $details)
    {
        $message = "";

        foreach ($details as $detail) {
            $message .= "  - id: " . $detail->id . PHP_EOL;

            if ($detail->date !== null) {
                $message .= "    date: " . $detail->date->format(DATE_ATOM) . PHP_EOL;
            }
            $message .= "    type: " . $detail->type . PHP_EOL;
            $message .= "    text: " . $detail->text . PHP_EOL;
            $message .= "    field: " . $detail->field . PHP_EOL;
        }

        return $message;
    }

    /**
     * @param Link[] $links
     * @return string
     */
    private function constructLinks(array $links)
    {
        $message = "";

        foreach ($links as $link) {
            $message .= "  " . $link->title . ": " . $link->href . PHP_EOL;
        }

        return $message;
    }

    private function constructRequestMessage(RequestInterface $request, string $content)
    {
        $message = "  method: " . $request->getMethod() . PHP_EOL;
        $message .= "  url: " . $request->getUri() . PHP_EOL;

        if ($content !== "") {
            $message .= "  body: " . $content . PHP_EOL;
        }

        return $message;
    }

    private function constructResponseMessage($responseBody, ResponseInterface $response)
    {
        $message = "  httpStatusCode: " . $response->getStatusCode() . PHP_EOL;

        if ($responseBody !== "") {
            $message .= "  body: " . $responseBody;
        }

        return $message;
    }

    private function deserializeResponse($responseBody)
    {
        if ($responseBody === null) {
            return null;
        }

        return ObjectMapper::map($responseBody, ResponseError::class);
    }

    /**
     * @param RequestInterface $request
     * @param RequestException $ex
     * @param string $content
     * @return  BitmovinApiException
     */
    private function constructBitmovinApiExceptionWithRequestException(RequestInterface $request, string $content, RequestException $ex): BitmovinApiException
    {
        $message = explode(PHP_EOL . "[file]", $ex->getMessage())[0] . PHP_EOL;

        if ($ex->getPrevious() !== null && $ex->getPrevious()->getMessage() !== "") {
            $message .= "developerMessage:" . PHP_EOL;
            $message .= "  " . explode(PHP_EOL . "[file]", $ex->getPrevious()->getMessage())[0] . PHP_EOL;
        }

        $message .= "request:" . PHP_EOL;
        $message .= $this->constructRequestMessage($request, $content);

        return new BitmovinApiException($message, 0, null);
    }

    private function constructMessage($responseError): string
    {
        if ($responseError !== null && $responseError->data !== null && $responseError->data->message !== "") {
            return $responseError->data->message . PHP_EOL;
        }

        return "Request failed" . PHP_EOL;
    }
}
