<?php

namespace BitmovinApiSdk\Apis\Analytics\Queries;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Queries\Count\CountApi;
use BitmovinApiSdk\Apis\Analytics\Queries\Sum\SumApi;
use BitmovinApiSdk\Apis\Analytics\Queries\Avg\AvgApi;
use BitmovinApiSdk\Apis\Analytics\Queries\Min\MinApi;
use BitmovinApiSdk\Apis\Analytics\Queries\Max\MaxApi;
use BitmovinApiSdk\Apis\Analytics\Queries\Stddev\StddevApi;
use BitmovinApiSdk\Apis\Analytics\Queries\Percentile\PercentileApi;
use BitmovinApiSdk\Apis\Analytics\Queries\Variance\VarianceApi;
use BitmovinApiSdk\Apis\Analytics\Queries\Median\MedianApi;

class QueriesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CountApi */
    public $count;

    /** @var SumApi */
    public $sum;

    /** @var AvgApi */
    public $avg;

    /** @var MinApi */
    public $min;

    /** @var MaxApi */
    public $max;

    /** @var StddevApi */
    public $stddev;

    /** @var PercentileApi */
    public $percentile;

    /** @var VarianceApi */
    public $variance;

    /** @var MedianApi */
    public $median;

    /**
     * QueriesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->count = new CountApi(null, $this->httpWrapper);
        $this->sum = new SumApi(null, $this->httpWrapper);
        $this->avg = new AvgApi(null, $this->httpWrapper);
        $this->min = new MinApi(null, $this->httpWrapper);
        $this->max = new MaxApi(null, $this->httpWrapper);
        $this->stddev = new StddevApi(null, $this->httpWrapper);
        $this->percentile = new PercentileApi(null, $this->httpWrapper);
        $this->variance = new VarianceApi(null, $this->httpWrapper);
        $this->median = new MedianApi(null, $this->httpWrapper);
    }
}
