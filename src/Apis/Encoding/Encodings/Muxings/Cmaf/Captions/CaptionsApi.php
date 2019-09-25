<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Cmaf\Captions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Cmaf\Captions\Ttml\TtmlApi;

class CaptionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var TtmlApi */
    public $ttml;

    /**
     * CaptionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->ttml = new TtmlApi(null, $this->httpWrapper);
    }
}
