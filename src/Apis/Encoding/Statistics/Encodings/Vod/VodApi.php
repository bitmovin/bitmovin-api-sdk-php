<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Vod;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class VodApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * VodApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List VOD Encoding Statistics
     *
     * @param EncodingStatisticsVodListQueryParams|null $queryParams
     * @return EncodingStatisticsVodPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(EncodingStatisticsVodListQueryParams $queryParams = null) : EncodingStatisticsVodPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/statistics/encodings/vod', [], $queryParams, null, true);

        return ObjectMapper::map($response, EncodingStatisticsVodPaginationResponse::class);
    }

    /**
     * List VOD Encoding Statistics Within Specific Dates
     *
     * @param Carbon $from
     * @param Carbon $to
     * @param EncodingStatisticsVodListByDateRangeQueryParams|null $queryParams
     * @return EncodingStatisticsVodPaginationResponse
     * @throws BitmovinApiException
     */
    public function listByDateRange(Carbon $from, Carbon $to, EncodingStatisticsVodListByDateRangeQueryParams $queryParams = null) : EncodingStatisticsVodPaginationResponse
    {
        $pathParams = [
            'from' => $from->format('Y-m-d'),
            'to' => $to->format('Y-m-d'),
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/statistics/encodings/vod/{from}/{to}', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, EncodingStatisticsVodPaginationResponse::class);
    }
}
