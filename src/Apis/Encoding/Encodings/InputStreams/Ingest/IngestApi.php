<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Ingest;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class IngestApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * IngestApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Ingest Input Stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\IngestInputStream $ingestInputStream
     * @return \BitmovinApiSdk\Models\IngestInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\IngestInputStream $ingestInputStream) : \BitmovinApiSdk\Models\IngestInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/input-streams/ingest', $pathParams,  null, $ingestInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\IngestInputStream::class);
    }

    /**
     * Delete Ingest Input Stream
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/input-streams/ingest/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Ingest Input Stream Details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\IngestInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\IngestInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/ingest/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\IngestInputStream::class);
    }

    /**
     * List Ingest Input Streams
     *
     * @param string $encodingId
     * @param IngestInputStreamListQueryParams|null $queryParams
     * @return IngestInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, IngestInputStreamListQueryParams $queryParams = null) : IngestInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/ingest', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, IngestInputStreamPaginationResponse::class);
    }
}
