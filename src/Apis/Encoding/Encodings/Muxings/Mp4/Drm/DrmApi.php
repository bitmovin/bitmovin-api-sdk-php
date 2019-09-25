<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Playready\PlayreadyApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Clearkey\ClearkeyApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Widevine\WidevineApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Marlin\MarlinApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Cenc\CencApi;

class DrmApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var PlayreadyApi */
    public $playready;

    /** @var ClearkeyApi */
    public $clearkey;

    /** @var WidevineApi */
    public $widevine;

    /** @var MarlinApi */
    public $marlin;

    /** @var CencApi */
    public $cenc;

    /**
     * DrmApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->playready = new PlayreadyApi(null, $this->httpWrapper);
        $this->clearkey = new ClearkeyApi(null, $this->httpWrapper);
        $this->widevine = new WidevineApi(null, $this->httpWrapper);
        $this->marlin = new MarlinApi(null, $this->httpWrapper);
        $this->cenc = new CencApi(null, $this->httpWrapper);
    }

    /**
     * List all DRM configurations of MP4 Muxing
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
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/mp4/{muxing_id}/drm', $pathParams,  null, null, true);

        return ObjectMapper::map($response, DrmPaginationResponse::class);
    }
}
