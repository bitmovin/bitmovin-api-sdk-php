<?php

namespace BitmovinApiSdk\Apis\Encoding\Live;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Live\StreamKeys\StreamKeysApi;
use BitmovinApiSdk\Apis\Encoding\Live\StandbyPools\StandbyPoolsApi;

class LiveApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var StreamKeysApi */
    public $streamKeys;

    /** @var StandbyPoolsApi */
    public $standbyPools;

    /**
     * LiveApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->streamKeys = new StreamKeysApi(null, $this->httpWrapper);
        $this->standbyPools = new StandbyPoolsApi(null, $this->httpWrapper);
    }
}
