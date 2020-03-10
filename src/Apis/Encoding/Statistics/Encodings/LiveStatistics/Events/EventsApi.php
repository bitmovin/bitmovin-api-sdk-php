<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Events;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class EventsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * EventsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List Events of Live Statistics from an Encoding
     *
     * @param string $encodingId
     * @param LiveEncodingStatsEventListQueryParams|null $queryParams
     * @return LiveEncodingStatsEventPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, LiveEncodingStatsEventListQueryParams $queryParams = null) : LiveEncodingStatsEventPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/statistics/encodings/{encoding_id}/live-statistics/events', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, LiveEncodingStatsEventPaginationResponse::class);
    }
}
