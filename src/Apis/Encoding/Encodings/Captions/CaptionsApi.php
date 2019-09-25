<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Captions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Captions\Scc\SccApi;

class CaptionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var SccApi */
    public $scc;

    /**
     * CaptionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->scc = new SccApi(null, $this->httpWrapper);
    }
}
