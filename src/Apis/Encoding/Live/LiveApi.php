<?php

namespace BitmovinApiSdk\Apis\Encoding\Live;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Live\Encodings\EncodingsApi;
use BitmovinApiSdk\Apis\Encoding\Live\DnsMappings\DnsMappingsApi;
use BitmovinApiSdk\Apis\Encoding\Live\StreamKeys\StreamKeysApi;
use BitmovinApiSdk\Apis\Encoding\Live\StandbyPools\StandbyPoolsApi;

class LiveApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var EncodingsApi */
    public $encodings;

    /** @var DnsMappingsApi */
    public $dnsMappings;

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

        $this->encodings = new EncodingsApi(null, $this->httpWrapper);
        $this->dnsMappings = new DnsMappingsApi(null, $this->httpWrapper);
        $this->streamKeys = new StreamKeysApi(null, $this->httpWrapper);
        $this->standbyPools = new StandbyPoolsApi(null, $this->httpWrapper);
    }
}
