<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Labels;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Statistics\Labels\Daily\DailyApi;

class LabelsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DailyApi */
    public $daily;

    /**
     * LabelsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->daily = new DailyApi(null, $this->httpWrapper);
    }

    /**
     * Get Statistics per Label
     *
     * @param StatisticsPerLabelListQueryParams|null $queryParams
     * @return StatisticsPerLabelPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(StatisticsPerLabelListQueryParams $queryParams = null) : StatisticsPerLabelPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/statistics/labels/', [], $queryParams, null, true);

        return ObjectMapper::map($response, StatisticsPerLabelPaginationResponse::class);
    }

    /**
     * Get statistics per label within specific dates
     *
     * @param Carbon $from
     * @param Carbon $to
     * @param StatisticsPerLabelListByDateRangeQueryParams|null $queryParams
     * @return StatisticsPerLabelPaginationResponse
     * @throws BitmovinApiException
     */
    public function listByDateRange(Carbon $from, Carbon $to, StatisticsPerLabelListByDateRangeQueryParams $queryParams = null) : StatisticsPerLabelPaginationResponse
    {
        $pathParams = [
            'from' => $from->format('Y-m-d'),
            'to' => $to->format('Y-m-d'),
        ];
        $response = $this->httpWrapper->request('GET','/encoding/statistics/labels/{from}/{to}', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, StatisticsPerLabelPaginationResponse::class);
    }
}
