<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Cdn\Usage;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class UsageApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * UsageApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List CDN usage statistics within specific dates.
     *
     * @param CdnUsageStatisticsGetQueryParams|null $queryParams
     * @return \BitmovinApiSdk\Models\CdnUsageStatistics
     * @throws BitmovinApiException
     */
    public function get(CdnUsageStatisticsGetQueryParams $queryParams = null) : \BitmovinApiSdk\Models\CdnUsageStatistics
    {
        $response = $this->httpWrapper->request('GET', '/encoding/statistics/cdn/usage', [], $queryParams, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CdnUsageStatistics::class);
    }
}
