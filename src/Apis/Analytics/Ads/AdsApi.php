<?php

namespace BitmovinApiSdk\Apis\Analytics\Ads;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Ads\Queries\QueriesApi;

class AdsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var QueriesApi */
    public $queries;

    /**
     * AdsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->queries = new QueriesApi(null, $this->httpWrapper);
    }
}
