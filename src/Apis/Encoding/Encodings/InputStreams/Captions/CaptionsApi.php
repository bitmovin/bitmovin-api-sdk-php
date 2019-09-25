<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Captions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Captions\Cea608\Cea608Api;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Captions\Cea708\Cea708Api;

class CaptionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var Cea608Api */
    public $cea608;

    /** @var Cea708Api */
    public $cea708;

    /**
     * CaptionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->cea608 = new Cea608Api(null, $this->httpWrapper);
        $this->cea708 = new Cea708Api(null, $this->httpWrapper);
    }
}
