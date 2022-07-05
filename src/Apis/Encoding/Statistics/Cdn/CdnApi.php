<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Cdn;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Statistics\Cdn\Usage\UsageApi;

class CdnApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var UsageApi */
    public $usage;

    /**
     * CdnApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->usage = new UsageApi(null, $this->httpWrapper);
    }
}
