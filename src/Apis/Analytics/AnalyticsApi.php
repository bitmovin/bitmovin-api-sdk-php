<?php

namespace BitmovinApiSdk\Apis\Analytics;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Exports\ExportsApi;
use BitmovinApiSdk\Apis\Analytics\Impressions\ImpressionsApi;
use BitmovinApiSdk\Apis\Analytics\Insights\InsightsApi;
use BitmovinApiSdk\Apis\Analytics\Metrics\MetricsApi;
use BitmovinApiSdk\Apis\Analytics\Ads\AdsApi;
use BitmovinApiSdk\Apis\Analytics\Queries\QueriesApi;
use BitmovinApiSdk\Apis\Analytics\Licenses\LicensesApi;
use BitmovinApiSdk\Apis\Analytics\Outputs\OutputsApi;

class AnalyticsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ExportsApi */
    public $exports;

    /** @var ImpressionsApi */
    public $impressions;

    /** @var InsightsApi */
    public $insights;

    /** @var MetricsApi */
    public $metrics;

    /** @var AdsApi */
    public $ads;

    /** @var QueriesApi */
    public $queries;

    /** @var LicensesApi */
    public $licenses;

    /** @var OutputsApi */
    public $outputs;

    /**
     * AnalyticsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->exports = new ExportsApi(null, $this->httpWrapper);
        $this->impressions = new ImpressionsApi(null, $this->httpWrapper);
        $this->insights = new InsightsApi(null, $this->httpWrapper);
        $this->metrics = new MetricsApi(null, $this->httpWrapper);
        $this->ads = new AdsApi(null, $this->httpWrapper);
        $this->queries = new QueriesApi(null, $this->httpWrapper);
        $this->licenses = new LicensesApi(null, $this->httpWrapper);
        $this->outputs = new OutputsApi(null, $this->httpWrapper);
    }
}
