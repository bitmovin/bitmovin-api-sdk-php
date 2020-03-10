<?php

namespace BitmovinApiSdk\Common;
use BitmovinApiSdk\Models\ResponseError;
use BitmovinApiSdk\Models\ResponseErrorData;
use BitmovinApiSdk\Models\ResponseStatus;
use Exception;

class BitmovinApiException extends Exception
{
    /** @var int */
    private $httpStatusCode;

    /** @var ResponseError */
    private $responseError;

    /**
     * BitmovinApiException constructor.
     *
     * @param int $httpStatusCode
     * @param string $message
     * @param ResponseError $responseError
     * @param Exception $innerException
     */
    public function __construct(
        string $message,
        int $httpStatusCode,
        ResponseError $responseError = null,
        Exception $innerException = null
    )
    {
        parent::__construct($message, $innerException);
        $this->httpStatusCode = $httpStatusCode;
        $this->responseError = $responseError;
    }

    /**
     * @return int
     */
    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }

    /**
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->responseError->requestId;
    }

    /**
     * @return ResponseStatus
     */
    public function getResponseStatus(): ResponseStatus
    {
        return $this->responseError->status ?? ResponseStatus::ERROR();
    }

    /**
     * @return ResponseErrorData
     */
    public function getResponseErrorData()
    {
        return $this->responseError->data;
    }

    /**
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->responseError->data->code;
    }
}
