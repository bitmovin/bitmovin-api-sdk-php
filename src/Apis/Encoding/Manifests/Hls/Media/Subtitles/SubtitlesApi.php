<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Subtitles;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class SubtitlesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * SubtitlesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Subtitles Media
     *
     * @param string $manifestId
     * @param \BitmovinApiSdk\Models\SubtitlesMediaInfo $subtitlesMediaInfo
     * @return \BitmovinApiSdk\Models\SubtitlesMediaInfo
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, \BitmovinApiSdk\Models\SubtitlesMediaInfo $subtitlesMediaInfo) : \BitmovinApiSdk\Models\SubtitlesMediaInfo
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/hls/{manifest_id}/media/subtitles', $pathParams,  null, $subtitlesMediaInfo, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SubtitlesMediaInfo::class);
    }

    /**
     * Delete Subtitles Media
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/manifests/hls/{manifest_id}/media/subtitles/{media_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Subtitles Media Details
     *
     * @param string $manifestId
     * @param string $mediaId
     * @return \BitmovinApiSdk\Models\SubtitlesMediaInfo
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $mediaId) : \BitmovinApiSdk\Models\SubtitlesMediaInfo
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'media_id' => $mediaId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/media/subtitles/{media_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SubtitlesMediaInfo::class);
    }

    /**
     * List all Subtitles Media
     *
     * @param string $manifestId
     * @param SubtitlesMediaInfoListQueryParams|null $queryParams
     * @return SubtitlesMediaInfoPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, SubtitlesMediaInfoListQueryParams $queryParams = null) : SubtitlesMediaInfoPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/media/subtitles', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, SubtitlesMediaInfoPaginationResponse::class);
    }
}
