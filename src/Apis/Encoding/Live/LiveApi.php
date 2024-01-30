<?php

namespace BitmovinApiSdk\Apis\Encoding\Live;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Live\StreamKeys\StreamKeysApi;

class LiveApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var StreamKeysApi */
    public $streamKeys;

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
    }
}
