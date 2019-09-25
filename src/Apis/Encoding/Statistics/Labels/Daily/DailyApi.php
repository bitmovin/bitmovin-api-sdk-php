<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Labels\Daily;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class DailyApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DailyApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Get Daily Statistics per Label
     *
     * @param DailyStatisticsPerLabelListQueryParams|null $queryParams
     * @return DailyStatisticsPerLabelPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DailyStatisticsPerLabelListQueryParams $queryParams = null) : DailyStatisticsPerLabelPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/statistics/labels/daily', [], $queryParams, null, true);

        return ObjectMapper::map($response, DailyStatisticsPerLabelPaginationResponse::class);
    }

    /**
     * Get daily statistics per label within specific dates
     *
     * @param Carbon $from
     * @param Carbon $to
     * @param DailyStatisticsPerLabelListByDateRangeQueryParams|null $queryParams
     * @return DailyStatisticsPerLabelPaginationResponse
     * @throws BitmovinApiException
     */
    public function listByDateRange(Carbon $from, Carbon $to, DailyStatisticsPerLabelListByDateRangeQueryParams $queryParams = null) : DailyStatisticsPerLabelPaginationResponse
    {
        $pathParams = [
            'from' => $from->format('Y-m-d'),
            'to' => $to->format('Y-m-d'),
        ];
        $response = $this->httpWrapper->request('GET','/encoding/statistics/labels/daily/{from}/{to}', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DailyStatisticsPerLabelPaginationResponse::class);
    }
}
