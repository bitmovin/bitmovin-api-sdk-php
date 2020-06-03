<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Marlin;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Marlin\Customdata\CustomdataApi;

class MarlinApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * MarlinApi constructor.
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
     * Add Marlin DRM to an MP4 muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param \BitmovinApiSdk\Models\MarlinDrm $marlinDrm
     * @return \BitmovinApiSdk\Models\MarlinDrm
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $muxingId, \BitmovinApiSdk\Models\MarlinDrm $marlinDrm) : \BitmovinApiSdk\Models\MarlinDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/muxings/mp4/{muxing_id}/drm/marlin', $pathParams,  null, $marlinDrm, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\MarlinDrm::class);
    }

    /**
     * Delete Marlin DRM from an MP4 muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $drmId
     * @return \BitmovinApiSdk\Models\MarlinDrm
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $muxingId, string $drmId) : \BitmovinApiSdk\Models\MarlinDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'drm_id' => $drmId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/muxings/mp4/{muxing_id}/drm/marlin/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\MarlinDrm::class);
    }

    /**
     * Marlin DRM Details of an MP4 muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $drmId
     * @return \BitmovinApiSdk\Models\MarlinDrm
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $drmId) : \BitmovinApiSdk\Models\MarlinDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'drm_id' => $drmId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/mp4/{muxing_id}/drm/marlin/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\MarlinDrm::class);
    }

    /**
     * List Marlin DRMs of an MP4 muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param MarlinDrmListQueryParams|null $queryParams
     * @return MarlinDrmPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $muxingId, MarlinDrmListQueryParams $queryParams = null) : MarlinDrmPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/mp4/{muxing_id}/drm/marlin', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, MarlinDrmPaginationResponse::class);
    }
}
