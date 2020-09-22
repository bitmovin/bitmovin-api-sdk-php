<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveWebm\Drm;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveWebm\Drm\Cenc\CencApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveWebm\Drm\Speke\SpekeApi;

class DrmApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CencApi */
    public $cenc;

    /** @var SpekeApi */
    public $speke;

    /**
     * DrmApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->cenc = new CencApi(null, $this->httpWrapper);
        $this->speke = new SpekeApi(null, $this->httpWrapper);
    }

    /**
     * DRM Details of a Progressive WEBM muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $drmId
     * @return \BitmovinApiSdk\Models\Drm
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $drmId) : \BitmovinApiSdk\Models\Drm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'drm_id' => $drmId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/progressive-webm/{muxing_id}/drm/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Drm::class);
    }

    /**
     * List all DRMs of Progressive WEBM muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return DrmPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $muxingId) : DrmPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/progressive-webm/{muxing_id}/drm', $pathParams,  null, null, true);

        return ObjectMapper::map($response, DrmPaginationResponse::class);
    }
}
