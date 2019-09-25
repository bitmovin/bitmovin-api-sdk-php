<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Video;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class VideoApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * VideoApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Video Media
     *
     * @param string $manifestId
     * @param \BitmovinApiSdk\Models\VideoMediaInfo $videoMediaInfo
     * @return \BitmovinApiSdk\Models\VideoMediaInfo
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, \BitmovinApiSdk\Models\VideoMediaInfo $videoMediaInfo) : \BitmovinApiSdk\Models\VideoMediaInfo
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/manifests/hls/{manifest_id}/media/video', $pathParams,  null, $videoMediaInfo, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\VideoMediaInfo::class);
    }

    /**
     * Delete Video Media
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
        $response = $this->httpWrapper->request('DELETE','/encoding/manifests/hls/{manifest_id}/media/video/{media_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Video Media Details
     *
     * @param string $manifestId
     * @param string $mediaId
     * @return \BitmovinApiSdk\Models\VideoMediaInfo
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $mediaId) : \BitmovinApiSdk\Models\VideoMediaInfo
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'media_id' => $mediaId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/hls/{manifest_id}/media/video/{media_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\VideoMediaInfo::class);
    }

    /**
     * List all Video Media
     *
     * @param string $manifestId
     * @param VideoMediaInfoListQueryParams|null $queryParams
     * @return VideoMediaInfoPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, VideoMediaInfoListQueryParams $queryParams = null) : VideoMediaInfoPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/hls/{manifest_id}/media/video', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, VideoMediaInfoPaginationResponse::class);
    }
}
