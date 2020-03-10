<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Live\LiveApi;
use BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Vod\VodApi;
use BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\LiveStatisticsApi;

class EncodingsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var LiveApi */
    public $live;

    /** @var VodApi */
    public $vod;

    /** @var LiveStatisticsApi */
    public $liveStatistics;

    /**
     * EncodingsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->live = new LiveApi(null, $this->httpWrapper);
        $this->vod = new VodApi(null, $this->httpWrapper);
        $this->liveStatistics = new LiveStatisticsApi(null, $this->httpWrapper);
    }

    /**
     * Get Statistics from an Encoding
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\EncodingStats
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\EncodingStats
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/statistics/encodings/{encoding_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EncodingStats::class);
    }
}
