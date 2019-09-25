<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Vtt;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class VttApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * VttApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add VTT Media
     *
     * @param string $manifestId
     * @param \BitmovinApiSdk\Models\VttMediaInfo $vttMediaInfo
     * @return \BitmovinApiSdk\Models\VttMediaInfo
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, \BitmovinApiSdk\Models\VttMediaInfo $vttMediaInfo) : \BitmovinApiSdk\Models\VttMediaInfo
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/manifests/hls/{manifest_id}/media/vtt', $pathParams,  null, $vttMediaInfo, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\VttMediaInfo::class);
    }

    /**
     * Delete VTT Media
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
        $response = $this->httpWrapper->request('DELETE','/encoding/manifests/hls/{manifest_id}/media/vtt/{media_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * VTT Media Details
     *
     * @param string $manifestId
     * @param string $mediaId
     * @return \BitmovinApiSdk\Models\VttMediaInfo
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $mediaId) : \BitmovinApiSdk\Models\VttMediaInfo
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'media_id' => $mediaId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/hls/{manifest_id}/media/vtt/{media_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\VttMediaInfo::class);
    }

    /**
     * List all VTT Media
     *
     * @param string $manifestId
     * @param VttMediaInfoListQueryParams|null $queryParams
     * @return VttMediaInfoPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, VttMediaInfoListQueryParams $queryParams = null) : VttMediaInfoPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/hls/{manifest_id}/media/vtt', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, VttMediaInfoPaginationResponse::class);
    }
}
