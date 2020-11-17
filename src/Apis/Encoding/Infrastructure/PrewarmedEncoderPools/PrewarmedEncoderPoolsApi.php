<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\PrewarmedEncoderPools;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Infrastructure\PrewarmedEncoderPools\Schedules\SchedulesApi;

class PrewarmedEncoderPoolsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var SchedulesApi */
    public $schedules;

    /**
     * PrewarmedEncoderPoolsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->schedules = new SchedulesApi(null, $this->httpWrapper);
    }

    /**
     * Create prewarmed encoder pool
     *
     * @param \BitmovinApiSdk\Models\PrewarmedEncoderPool $prewarmedEncoderPool
     * @return \BitmovinApiSdk\Models\PrewarmedEncoderPool
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\PrewarmedEncoderPool $prewarmedEncoderPool) : \BitmovinApiSdk\Models\PrewarmedEncoderPool
    {
        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/prewarmed-encoder-pools', [],  null, $prewarmedEncoderPool, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PrewarmedEncoderPool::class);
    }

    /**
     * Delete prewarmed encoder pool
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/infrastructure/prewarmed-encoder-pools/{pool_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Prewarmed encoder pool details
     *
     * @param string $poolId
     * @return \BitmovinApiSdk\Models\PrewarmedEncoderPool
     * @throws BitmovinApiException
     */
    public function get(string $poolId) : \BitmovinApiSdk\Models\PrewarmedEncoderPool
    {
        $pathParams = [
            'pool_id' => $poolId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/prewarmed-encoder-pools/{pool_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PrewarmedEncoderPool::class);
    }

    /**
     * List prewarmed encoder pools
     *
     * @param PrewarmedEncoderPoolListQueryParams|null $queryParams
     * @return PrewarmedEncoderPoolPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(PrewarmedEncoderPoolListQueryParams $queryParams = null) : PrewarmedEncoderPoolPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/prewarmed-encoder-pools', [], $queryParams, null, true);

        return ObjectMapper::map($response, PrewarmedEncoderPoolPaginationResponse::class);
    }

    /**
     * Start prewarmed encoder pool
     *
     * @param string $poolId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function start(string $poolId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'pool_id' => $poolId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/prewarmed-encoder-pools/{pool_id}/start', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Stop prewarmed encoder pool
     *
     * @param string $poolId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function stop(string $poolId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'pool_id' => $poolId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/prewarmed-encoder-pools/{pool_id}/stop', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }
}
