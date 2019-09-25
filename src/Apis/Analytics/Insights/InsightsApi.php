<?php

namespace BitmovinApiSdk\Apis\Analytics\Insights;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Insights\Organizations\OrganizationsApi;

class InsightsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var OrganizationsApi */
    public $organizations;

    /**
     * InsightsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->organizations = new OrganizationsApi(null, $this->httpWrapper);
    }
}
