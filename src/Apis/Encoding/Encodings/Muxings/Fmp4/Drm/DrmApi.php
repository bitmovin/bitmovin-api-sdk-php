<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Widevine\WidevineApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Playready\PlayreadyApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Primetime\PrimetimeApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Fairplay\FairplayApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Marlin\MarlinApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Clearkey\ClearkeyApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Cenc\CencApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Aes\AesApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Speke\SpekeApi;

class DrmApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var WidevineApi */
    public $widevine;

    /** @var PlayreadyApi */
    public $playready;

    /** @var PrimetimeApi */
    public $primetime;

    /** @var FairplayApi */
    public $fairplay;

    /** @var MarlinApi */
    public $marlin;

    /** @var ClearkeyApi */
    public $clearkey;

    /** @var CencApi */
    public $cenc;

    /** @var AesApi */
    public $aes;

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

        $this->widevine = new WidevineApi(null, $this->httpWrapper);
        $this->playready = new PlayreadyApi(null, $this->httpWrapper);
        $this->primetime = new PrimetimeApi(null, $this->httpWrapper);
        $this->fairplay = new FairplayApi(null, $this->httpWrapper);
        $this->marlin = new MarlinApi(null, $this->httpWrapper);
        $this->clearkey = new ClearkeyApi(null, $this->httpWrapper);
        $this->cenc = new CencApi(null, $this->httpWrapper);
        $this->aes = new AesApi(null, $this->httpWrapper);
        $this->speke = new SpekeApi(null, $this->httpWrapper);
    }

    /**
     * List all DRMs of an fMP4 muxing
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

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/fmp4/{muxing_id}/drm', $pathParams,  null, null, true);

        return ObjectMapper::map($response, DrmPaginationResponse::class);
    }
}
