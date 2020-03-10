<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Sidecar\DolbyVisionMetadataIngest;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class DolbyVisionMetadataIngestApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DolbyVisionMetadataIngestApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Dolby Vision Metadata Ingest Input Stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\DolbyVisionMetadataIngestInputStream $dolbyVisionMetadataIngestInputStream
     * @return \BitmovinApiSdk\Models\DolbyVisionMetadataIngestInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\DolbyVisionMetadataIngestInputStream $dolbyVisionMetadataIngestInputStream) : \BitmovinApiSdk\Models\DolbyVisionMetadataIngestInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/input-streams/sidecar/dolby-vision-metadata-ingest', $pathParams,  null, $dolbyVisionMetadataIngestInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyVisionMetadataIngestInputStream::class);
    }

    /**
     * Delete Dolby Vision Metadata Ingest Input Stream
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/input-streams/sidecar/dolby-vision-metadata-ingest/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Dolby Vision Metadata Ingest Input Stream Details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\DolbyVisionMetadataIngestInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\DolbyVisionMetadataIngestInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/sidecar/dolby-vision-metadata-ingest/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyVisionMetadataIngestInputStream::class);
    }

    /**
     * List Dolby Vision Metadata Ingest Input Streams
     *
     * @param string $encodingId
     * @param DolbyVisionMetadataIngestInputStreamListQueryParams|null $queryParams
     * @return DolbyVisionMetadataIngestInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, DolbyVisionMetadataIngestInputStreamListQueryParams $queryParams = null) : DolbyVisionMetadataIngestInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/sidecar/dolby-vision-metadata-ingest', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DolbyVisionMetadataIngestInputStreamPaginationResponse::class);
    }
}
