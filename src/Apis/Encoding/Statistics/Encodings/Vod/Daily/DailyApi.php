<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Vod\Daily;

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
     * List daily VoD encoding statistics within specific dates
     *
     * @param Carbon $from
     * @param Carbon $to
     * @return EncodingStatisticsPaginationResponse
     * @throws BitmovinApiException
     */
    public function listByDateRange(Carbon $from, Carbon $to) : EncodingStatisticsPaginationResponse
    {
        $pathParams = [
            'from' => $from->format('Y-m-d'),
            'to' => $to->format('Y-m-d'),
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/statistics/encodings/vod/daily/{from}/{to}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, EncodingStatisticsPaginationResponse::class);
    }
}
