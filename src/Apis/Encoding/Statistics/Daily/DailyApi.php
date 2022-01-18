<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Daily;

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
     * List Daily Statistics
     *
     * @param DailyStatisticsListQueryParams|null $queryParams
     * @return DailyStatisticsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DailyStatisticsListQueryParams $queryParams = null) : DailyStatisticsPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/statistics/daily', [], $queryParams, null, true);

        return ObjectMapper::map($response, DailyStatisticsPaginationResponse::class);
    }

    /**
     * List daily statistics within specific dates
     *
     * @param Carbon $from
     * @param Carbon $to
     * @return DailyStatisticsPaginationResponse
     * @throws BitmovinApiException
     */
    public function listByDateRange(Carbon $from, Carbon $to) : DailyStatisticsPaginationResponse
    {
        $pathParams = [
            'from' => $from->format('Y-m-d'),
            'to' => $to->format('Y-m-d'),
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/statistics/daily/{from}/{to}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, DailyStatisticsPaginationResponse::class);
    }
}
