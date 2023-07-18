<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Live\Options;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class OptionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * OptionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List live options encoding statistics for a given encoding
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\LiveEncodingOptionsStatistics
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\LiveEncodingOptionsStatistics
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/statistics/encodings/live/{encoding_id}/options', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveEncodingOptionsStatistics::class);
    }

    /**
     * List live options encoding statistics within specific dates
     *
     * @param LiveOptionsStatisticsListByDateRangeQueryParams|null $queryParams
     * @return \BitmovinApiSdk\Models\LiveOptionsStatistics
     * @throws BitmovinApiException
     */
    public function listByDateRange(LiveOptionsStatisticsListByDateRangeQueryParams $queryParams = null) : \BitmovinApiSdk\Models\LiveOptionsStatistics
    {
        $response = $this->httpWrapper->request('GET', '/encoding/statistics/encodings/live/options', [], $queryParams, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveOptionsStatistics::class);
    }
}
