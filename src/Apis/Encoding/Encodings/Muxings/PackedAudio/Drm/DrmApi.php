<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\PackedAudio\Drm;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\PackedAudio\Drm\Aes\AesApi;

class DrmApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var AesApi */
    public $aes;

    /**
     * DrmApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->aes = new AesApi(null, $this->httpWrapper);
    }
}
