<?php

namespace BitmovinApiSdk\Apis\Streams\Config;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Streams\Config\DomainRestriction\DomainRestrictionApi;

class ConfigApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DomainRestrictionApi */
    public $domainRestriction;

    /**
     * ConfigApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->domainRestriction = new DomainRestrictionApi(null, $this->httpWrapper);
    }
}
