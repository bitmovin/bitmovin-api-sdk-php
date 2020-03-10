<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Statistics\Daily\DailyApi;
use BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\EncodingsApi;
use BitmovinApiSdk\Apis\Encoding\Statistics\Labels\LabelsApi;

class StatisticsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DailyApi */
    public $daily;

    /** @var EncodingsApi */
    public $encodings;

    /** @var LabelsApi */
    public $labels;

    /**
     * StatisticsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->daily = new DailyApi(null, $this->httpWrapper);
        $this->encodings = new EncodingsApi(null, $this->httpWrapper);
        $this->labels = new LabelsApi(null, $this->httpWrapper);
    }

    /**
     * Show Overall Statistics
     *
     * @return \BitmovinApiSdk\Models\Statistics
     * @throws BitmovinApiException
     */
    public function get() : \BitmovinApiSdk\Models\Statistics
    {
        $response = $this->httpWrapper->request('GET', '/encoding/statistics', [],  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Statistics::class);
    }

    /**
     * Show Overall Statistics Within Specific Dates
     *
     * @param Carbon $from
     * @param Carbon $to
     * @param StatisticsListQueryParams|null $queryParams
     * @return StatisticsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(Carbon $from, Carbon $to, StatisticsListQueryParams $queryParams = null) : StatisticsPaginationResponse
    {
        $pathParams = [
            'from' => $from->format('Y-m-d'),
            'to' => $to->format('Y-m-d'),
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/statistics/{from}/{to}', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, StatisticsPaginationResponse::class);
    }
}
