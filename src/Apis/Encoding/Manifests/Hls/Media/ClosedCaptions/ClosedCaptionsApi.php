<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\ClosedCaptions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ClosedCaptionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ClosedCaptionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Closed Captions Media
     *
     * @param string $manifestId
     * @param \BitmovinApiSdk\Models\ClosedCaptionsMediaInfo $closedCaptionsMediaInfo
     * @return \BitmovinApiSdk\Models\ClosedCaptionsMediaInfo
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, \BitmovinApiSdk\Models\ClosedCaptionsMediaInfo $closedCaptionsMediaInfo) : \BitmovinApiSdk\Models\ClosedCaptionsMediaInfo
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/hls/{manifest_id}/media/closed-captions', $pathParams,  null, $closedCaptionsMediaInfo, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ClosedCaptionsMediaInfo::class);
    }

    /**
     * Delete Closed Captions Media
     *
     * @param string $manifestId
     * @param string $mediaId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $manifestId, string $mediaId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'media_id' => $mediaId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/manifests/hls/{manifest_id}/media/closed-captions/{media_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Closed Captions Media Details
     *
     * @param string $manifestId
     * @param string $mediaId
     * @return \BitmovinApiSdk\Models\ClosedCaptionsMediaInfo
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $mediaId) : \BitmovinApiSdk\Models\ClosedCaptionsMediaInfo
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'media_id' => $mediaId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/media/closed-captions/{media_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ClosedCaptionsMediaInfo::class);
    }

    /**
     * List all Closed Captions Media
     *
     * @param string $manifestId
     * @param ClosedCaptionsMediaInfoListQueryParams|null $queryParams
     * @return ClosedCaptionsMediaInfoPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, ClosedCaptionsMediaInfoListQueryParams $queryParams = null) : ClosedCaptionsMediaInfoPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/media/closed-captions', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ClosedCaptionsMediaInfoPaginationResponse::class);
    }
}
