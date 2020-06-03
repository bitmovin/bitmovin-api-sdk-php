<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Ts\Drm\Fairplay;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Ts\Drm\Fairplay\Customdata\CustomdataApi;

class FairplayApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * FairplayApi constructor.
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
     * Add FairPlay DRM to a TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param \BitmovinApiSdk\Models\FairPlayDrm $fairPlayDrm
     * @return \BitmovinApiSdk\Models\FairPlayDrm
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $muxingId, \BitmovinApiSdk\Models\FairPlayDrm $fairPlayDrm) : \BitmovinApiSdk\Models\FairPlayDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/muxings/ts/{muxing_id}/drm/fairplay', $pathParams,  null, $fairPlayDrm, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\FairPlayDrm::class);
    }

    /**
     * Delete FairPlay DRM from a TS muxing
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/muxings/ts/{muxing_id}/drm/fairplay/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * FairPlay DRM Details of a TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $drmId
     * @return \BitmovinApiSdk\Models\FairPlayDrm
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $drmId) : \BitmovinApiSdk\Models\FairPlayDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'drm_id' => $drmId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/ts/{muxing_id}/drm/fairplay/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\FairPlayDrm::class);
    }

    /**
     * List FairPlay DRMs of a TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param FairPlayDrmListQueryParams|null $queryParams
     * @return FairPlayDrmPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $muxingId, FairPlayDrmListQueryParams $queryParams = null) : FairPlayDrmPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/ts/{muxing_id}/drm/fairplay', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, FairPlayDrmPaginationResponse::class);
    }
}
