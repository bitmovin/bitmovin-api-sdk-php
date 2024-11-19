<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StandbyPools\Logs;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class LogsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * LogsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List event logs for a standby pool
     *
     * @param string $poolId
     * @param LiveStandbyPoolEventLogListQueryParams|null $queryParams
     * @return LiveStandbyPoolEventLogPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $poolId, LiveStandbyPoolEventLogListQueryParams $queryParams = null) : LiveStandbyPoolEventLogPaginationResponse
    {
        $pathParams = [
            'pool_id' => $poolId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/live/standby-pools/{pool_id}/logs', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, LiveStandbyPoolEventLogPaginationResponse::class);
    }
}
