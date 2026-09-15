<?php

namespace BitmovinApiSdk\Apis\Player\Testing;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Player\Testing\CodecCompatibility\CodecCompatibilityApi;

class TestingApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CodecCompatibilityApi */
    public $codecCompatibility;

    /**
     * TestingApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->codecCompatibility = new CodecCompatibilityApi(null, $this->httpWrapper);
    }
}
