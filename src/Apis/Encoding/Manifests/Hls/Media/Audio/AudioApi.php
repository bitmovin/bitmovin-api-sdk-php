<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Audio;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class AudioApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * AudioApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Audio Media
     *
     * @param string $manifestId
     * @param \BitmovinApiSdk\Models\AudioMediaInfo $audioMediaInfo
     * @return \BitmovinApiSdk\Models\AudioMediaInfo
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, \BitmovinApiSdk\Models\AudioMediaInfo $audioMediaInfo) : \BitmovinApiSdk\Models\AudioMediaInfo
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/manifests/hls/{manifest_id}/media/audio', $pathParams,  null, $audioMediaInfo, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AudioMediaInfo::class);
    }

    /**
     * Delete Audio Media
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
        $response = $this->httpWrapper->request('DELETE','/encoding/manifests/hls/{manifest_id}/media/audio/{media_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Audio Media Details
     *
     * @param string $manifestId
     * @param string $mediaId
     * @return \BitmovinApiSdk\Models\AudioMediaInfo
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $mediaId) : \BitmovinApiSdk\Models\AudioMediaInfo
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'media_id' => $mediaId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/hls/{manifest_id}/media/audio/{media_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AudioMediaInfo::class);
    }

    /**
     * List all Audio Media
     *
     * @param string $manifestId
     * @param AudioMediaInfoListQueryParams|null $queryParams
     * @return AudioMediaInfoPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, AudioMediaInfoListQueryParams $queryParams = null) : AudioMediaInfoPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/hls/{manifest_id}/media/audio', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, AudioMediaInfoPaginationResponse::class);
    }
}
