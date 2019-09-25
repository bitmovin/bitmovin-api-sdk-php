<?php

namespace BitmovinApiSdk\Apis\Player\CustomBuilds;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Player\CustomBuilds\Web\WebApi;

class CustomBuildsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var WebApi */
    public $web;

    /**
     * CustomBuildsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->web = new WebApi(null, $this->httpWrapper);
    }
}
