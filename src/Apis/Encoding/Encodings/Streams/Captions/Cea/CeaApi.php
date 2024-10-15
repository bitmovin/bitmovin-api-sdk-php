<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea\Scc\SccApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea\Srt\SrtApi;

class CeaApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var SccApi */
    public $scc;

    /** @var SrtApi */
    public $srt;

    /**
     * CeaApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->scc = new SccApi(null, $this->httpWrapper);
        $this->srt = new SrtApi(null, $this->httpWrapper);
    }
}
