<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Hdr\DolbyVision;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class DolbyVisionApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DolbyVisionApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Dolby Vision Metadata
     *
     * @param string $encodingId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\DolbyVisionMetadata $dolbyVisionMetadata
     * @return \BitmovinApiSdk\Models\DolbyVisionMetadata
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId, \BitmovinApiSdk\Models\DolbyVisionMetadata $dolbyVisionMetadata) : \BitmovinApiSdk\Models\DolbyVisionMetadata
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/streams/{stream_id}/hdr/dolby-vision', $pathParams,  null, $dolbyVisionMetadata, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyVisionMetadata::class);
    }

    /**
     * Delete Dolby Vision Metadata
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $hdrId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $streamId, string $hdrId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'hdr_id' => $hdrId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/streams/{stream_id}/hdr/dolby-vision/{hdr_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Dolby Vision Metadata Details
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $hdrId
     * @return \BitmovinApiSdk\Models\DolbyVisionMetadata
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId, string $hdrId) : \BitmovinApiSdk\Models\DolbyVisionMetadata
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'hdr_id' => $hdrId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/streams/{stream_id}/hdr/dolby-vision/{hdr_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyVisionMetadata::class);
    }

    /**
     * List Dolby Vision Metadata
     *
     * @param string $encodingId
     * @param string $streamId
     * @param DolbyVisionMetadataListQueryParams|null $queryParams
     * @return DolbyVisionMetadataPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId, DolbyVisionMetadataListQueryParams $queryParams = null) : DolbyVisionMetadataPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/streams/{stream_id}/hdr/dolby-vision', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DolbyVisionMetadataPaginationResponse::class);
    }
}
