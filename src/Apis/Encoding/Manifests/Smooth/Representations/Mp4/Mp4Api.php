<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\Representations\Mp4;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class Mp4Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * Mp4Api constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add MP4 Representation to Smooth Streaming Manifest
     *
     * @param string $manifestId
     * @param \BitmovinApiSdk\Models\SmoothStreamingRepresentation $smoothStreamingRepresentation
     * @return \BitmovinApiSdk\Models\SmoothStreamingRepresentation
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, \BitmovinApiSdk\Models\SmoothStreamingRepresentation $smoothStreamingRepresentation) : \BitmovinApiSdk\Models\SmoothStreamingRepresentation
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/manifests/smooth/{manifest_id}/representations/mp4', $pathParams,  null, $smoothStreamingRepresentation, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SmoothStreamingRepresentation::class);
    }

    /**
     * Delete Smooth Streaming MP4 Representation
     *
     * @param string $manifestId
     * @param string $representationId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $manifestId, string $representationId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'representation_id' => $representationId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/manifests/smooth/{manifest_id}/representations/mp4/{representation_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Smooth Streaming MP4 Representation Details
     *
     * @param string $manifestId
     * @param string $representationId
     * @return \BitmovinApiSdk\Models\SmoothStreamingRepresentation
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $representationId) : \BitmovinApiSdk\Models\SmoothStreamingRepresentation
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'representation_id' => $representationId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/smooth/{manifest_id}/representations/mp4/{representation_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SmoothStreamingRepresentation::class);
    }

    /**
     * List MP4 Representation
     *
     * @param string $manifestId
     * @param SmoothStreamingRepresentationListQueryParams|null $queryParams
     * @return SmoothStreamingRepresentationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, SmoothStreamingRepresentationListQueryParams $queryParams = null) : SmoothStreamingRepresentationPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/smooth/{manifest_id}/representations/mp4', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, SmoothStreamingRepresentationPaginationResponse::class);
    }
}
