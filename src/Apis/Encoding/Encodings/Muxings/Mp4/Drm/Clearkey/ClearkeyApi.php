<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Clearkey;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Clearkey\Customdata\CustomdataApi;

class ClearkeyApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * ClearkeyApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
    }

    /**
     * Add ClearKey DRM to an MP4 muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param \BitmovinApiSdk\Models\ClearKeyDrm $clearKeyDrm
     * @return \BitmovinApiSdk\Models\ClearKeyDrm
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $muxingId, \BitmovinApiSdk\Models\ClearKeyDrm $clearKeyDrm) : \BitmovinApiSdk\Models\ClearKeyDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/muxings/mp4/{muxing_id}/drm/clearkey', $pathParams,  null, $clearKeyDrm, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ClearKeyDrm::class);
    }

    /**
     * Delete ClearKey DRM from an MP4 muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $drmId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $muxingId, string $drmId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'drm_id' => $drmId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/muxings/mp4/{muxing_id}/drm/clearkey/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * ClearKey DRM Details of an MP4 muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $drmId
     * @return \BitmovinApiSdk\Models\ClearKeyDrm
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $drmId) : \BitmovinApiSdk\Models\ClearKeyDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'drm_id' => $drmId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/mp4/{muxing_id}/drm/clearkey/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ClearKeyDrm::class);
    }

    /**
     * List ClearKey DRMs of an MP4 muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param ClearKeyDrmListQueryParams|null $queryParams
     * @return ClearKeyDrmPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $muxingId, ClearKeyDrmListQueryParams $queryParams = null) : ClearKeyDrmPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/mp4/{muxing_id}/drm/clearkey', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ClearKeyDrmPaginationResponse::class);
    }
}
