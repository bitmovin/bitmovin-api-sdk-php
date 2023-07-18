<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Live;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Live\Daily\DailyApi;
use BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Live\Options\OptionsApi;

class LiveApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DailyApi */
    public $daily;

    /** @var OptionsApi */
    public $options;

    /**
     * LiveApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->daily = new DailyApi(null, $this->httpWrapper);
        $this->options = new OptionsApi(null, $this->httpWrapper);
    }

    /**
     * List Live Encoding Statistics
     *
     * @param EncodingStatisticsLiveListQueryParams|null $queryParams
     * @return EncodingStatisticsLivePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(EncodingStatisticsLiveListQueryParams $queryParams = null) : EncodingStatisticsLivePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/statistics/encodings/live', [], $queryParams, null, true);

        return ObjectMapper::map($response, EncodingStatisticsLivePaginationResponse::class);
    }

    /**
     * List live encoding statistics within specific dates
     *
     * @param Carbon $from
     * @param Carbon $to
     * @param EncodingStatisticsLiveListByDateRangeQueryParams|null $queryParams
     * @return EncodingStatisticsLivePaginationResponse
     * @throws BitmovinApiException
     */
    public function listByDateRange(Carbon $from, Carbon $to, EncodingStatisticsLiveListByDateRangeQueryParams $queryParams = null) : EncodingStatisticsLivePaginationResponse
    {
        $pathParams = [
            'from' => $from->format('Y-m-d'),
            'to' => $to->format('Y-m-d'),
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/statistics/encodings/live/{from}/{to}', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, EncodingStatisticsLivePaginationResponse::class);
    }
}
