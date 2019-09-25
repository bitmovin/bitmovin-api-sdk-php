<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea\CeaApi;

class CaptionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CeaApi */
    public $cea;

    /**
     * CaptionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->cea = new CeaApi(null, $this->httpWrapper);
    }
}
