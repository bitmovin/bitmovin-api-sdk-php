<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Playready;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Playready\Customdata\CustomdataApi;

class PlayreadyApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * PlayreadyApi constructor.
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
     * Add PlayReady DRM to an fMP4 muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param \BitmovinApiSdk\Models\PlayReadyDrm $playReadyDrm
     * @return \BitmovinApiSdk\Models\PlayReadyDrm
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $muxingId, \BitmovinApiSdk\Models\PlayReadyDrm $playReadyDrm) : \BitmovinApiSdk\Models\PlayReadyDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/muxings/fmp4/{muxing_id}/drm/playready', $pathParams,  null, $playReadyDrm, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PlayReadyDrm::class);
    }

    /**
     * Delete PlayReady DRM from an fMP4 muxing
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/muxings/fmp4/{muxing_id}/drm/playready/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * PlayReady DRM Details of an fMP4 muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $drmId
     * @return \BitmovinApiSdk\Models\PlayReadyDrm
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $drmId) : \BitmovinApiSdk\Models\PlayReadyDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'drm_id' => $drmId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/fmp4/{muxing_id}/drm/playready/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PlayReadyDrm::class);
    }

    /**
     * List PlayReady DRMs of an fMP4 muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param PlayReadyDrmListQueryParams|null $queryParams
     * @return PlayReadyDrmPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $muxingId, PlayReadyDrmListQueryParams $queryParams = null) : PlayReadyDrmPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/fmp4/{muxing_id}/drm/playready', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, PlayReadyDrmPaginationResponse::class);
    }
}
