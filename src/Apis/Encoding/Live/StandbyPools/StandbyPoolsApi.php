<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StandbyPools;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Live\StandbyPools\Actions\ActionsApi;
use BitmovinApiSdk\Apis\Encoding\Live\StandbyPools\Encodings\EncodingsApi;
use BitmovinApiSdk\Apis\Encoding\Live\StandbyPools\Logs\LogsApi;

class StandbyPoolsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ActionsApi */
    public $actions;

    /** @var EncodingsApi */
    public $encodings;

    /** @var LogsApi */
    public $logs;

    /**
     * StandbyPoolsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->actions = new ActionsApi(null, $this->httpWrapper);
        $this->encodings = new EncodingsApi(null, $this->httpWrapper);
        $this->logs = new LogsApi(null, $this->httpWrapper);
    }

    /**
     * Create new standby pool
     *
     * @param \BitmovinApiSdk\Models\LiveStandbyPoolRequest $liveStandbyPoolRequest
     * @return \BitmovinApiSdk\Models\LiveStandbyPoolDetails
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\LiveStandbyPoolRequest $liveStandbyPoolRequest) : \BitmovinApiSdk\Models\LiveStandbyPoolDetails
    {
        $response = $this->httpWrapper->request('POST', '/encoding/live/standby-pools', [],  null, $liveStandbyPoolRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveStandbyPoolDetails::class);
    }

    /**
     * Delete standby pool by id
     *
     * @param string $poolId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $poolId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'pool_id' => $poolId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/live/standby-pools/{pool_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get details of a standby pool by id
     *
     * @param string $poolId
     * @return \BitmovinApiSdk\Models\LiveStandbyPoolDetails
     * @throws BitmovinApiException
     */
    public function get(string $poolId) : \BitmovinApiSdk\Models\LiveStandbyPoolDetails
    {
        $pathParams = [
            'pool_id' => $poolId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/live/standby-pools/{pool_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveStandbyPoolDetails::class);
    }

    /**
     * List Standby pools
     *
     * @return LiveStandbyPoolResponsePaginationResponse
     * @throws BitmovinApiException
     */
    public function list() : LiveStandbyPoolResponsePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/live/standby-pools', [],  null, null, true);

        return ObjectMapper::map($response, LiveStandbyPoolResponsePaginationResponse::class);
    }

    /**
     * Partially update standby pool by id
     *
     * @param string $poolId
     * @param \BitmovinApiSdk\Models\LiveStandbyPoolUpdate $liveStandbyPoolUpdate
     * @return \BitmovinApiSdk\Models\LiveStandbyPoolDetails
     * @throws BitmovinApiException
     */
    public function patch(string $poolId, \BitmovinApiSdk\Models\LiveStandbyPoolUpdate $liveStandbyPoolUpdate) : \BitmovinApiSdk\Models\LiveStandbyPoolDetails
    {
        $pathParams = [
            'pool_id' => $poolId,
        ];

        $response = $this->httpWrapper->request('PATCH', '/encoding/live/standby-pools/{pool_id}', $pathParams,  null, $liveStandbyPoolUpdate, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveStandbyPoolDetails::class);
    }
}
