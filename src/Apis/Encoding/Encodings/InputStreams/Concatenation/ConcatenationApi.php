<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Concatenation;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class ConcatenationApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ConcatenationApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Concatenation Input Stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\ConcatenationInputStream $concatenationInputStream
     * @return \BitmovinApiSdk\Models\ConcatenationInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\ConcatenationInputStream $concatenationInputStream) : \BitmovinApiSdk\Models\ConcatenationInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/input-streams/concatenation', $pathParams,  null, $concatenationInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ConcatenationInputStream::class);
    }

    /**
     * Delete Concatenation Input Stream
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/input-streams/concatenation/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Concatenation Input Stream Details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\ConcatenationInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\ConcatenationInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/concatenation/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ConcatenationInputStream::class);
    }

    /**
     * List Concatenation Input Streams
     *
     * @param string $encodingId
     * @param ConcatenationInputStreamListQueryParams|null $queryParams
     * @return ConcatenationInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, ConcatenationInputStreamListQueryParams $queryParams = null) : ConcatenationInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/concatenation', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ConcatenationInputStreamPaginationResponse::class);
    }
}
