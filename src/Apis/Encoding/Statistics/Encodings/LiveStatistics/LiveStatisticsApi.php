<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Events\EventsApi;
use BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Streams\StreamsApi;
use BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Srt\SrtApi;

class LiveStatisticsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var EventsApi */
    public $events;

    /** @var StreamsApi */
    public $streams;

    /** @var SrtApi */
    public $srt;

    /**
     * LiveStatisticsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->events = new EventsApi(null, $this->httpWrapper);
        $this->streams = new StreamsApi(null, $this->httpWrapper);
        $this->srt = new SrtApi(null, $this->httpWrapper);
    }

    /**
     * List Live Statistics from an Encoding
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\LiveEncodingStats
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\LiveEncodingStats
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/statistics/encodings/{encoding_id}/live-statistics', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveEncodingStats::class);
    }
}
