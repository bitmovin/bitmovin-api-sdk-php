<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Captions\Cea708;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class Cea708Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * Cea708Api constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add CEA 708 Input Stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\Cea708CaptionInputStream $cea708CaptionInputStream
     * @return \BitmovinApiSdk\Models\Cea708CaptionInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\Cea708CaptionInputStream $cea708CaptionInputStream) : \BitmovinApiSdk\Models\Cea708CaptionInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/input-streams/captions/cea708', $pathParams,  null, $cea708CaptionInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Cea708CaptionInputStream::class);
    }

    /**
     * Delete CEA 708 Input Stream
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/input-streams/captions/cea708/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * CEA 708 Input Stream Details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\Cea708CaptionInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\Cea708CaptionInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/captions/cea708/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Cea708CaptionInputStream::class);
    }

    /**
     * List CEA 708 Input Streams
     *
     * @param string $encodingId
     * @param Cea708CaptionInputStreamListQueryParams|null $queryParams
     * @return Cea708CaptionInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, Cea708CaptionInputStreamListQueryParams $queryParams = null) : Cea708CaptionInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/captions/cea708', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, Cea708CaptionInputStreamPaginationResponse::class);
    }
}
