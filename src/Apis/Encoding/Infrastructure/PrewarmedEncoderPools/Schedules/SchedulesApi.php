<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\PrewarmedEncoderPools\Schedules;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class SchedulesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * SchedulesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create prewarmed encoder pool schedule
     *
     * @param string $poolId
     * @param \BitmovinApiSdk\Models\PrewarmedEncoderPoolSchedule $prewarmedEncoderPoolSchedule
     * @return \BitmovinApiSdk\Models\PrewarmedEncoderPoolSchedule
     * @throws BitmovinApiException
     */
    public function create(string $poolId, \BitmovinApiSdk\Models\PrewarmedEncoderPoolSchedule $prewarmedEncoderPoolSchedule) : \BitmovinApiSdk\Models\PrewarmedEncoderPoolSchedule
    {
        $pathParams = [
            'pool_id' => $poolId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/prewarmed-encoder-pools/{pool_id}/schedules', $pathParams,  null, $prewarmedEncoderPoolSchedule, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PrewarmedEncoderPoolSchedule::class);
    }

    /**
     * Delete prewarmed encoder pool schedule
     *
     * @param string $poolId
     * @param string $scheduleId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $poolId, string $scheduleId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'pool_id' => $poolId,
            'schedule_id' => $scheduleId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/infrastructure/prewarmed-encoder-pools/{pool_id}/schedules/{schedule_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Prewarmed encoder pool schedule details
     *
     * @param string $poolId
     * @param string $scheduleId
     * @return \BitmovinApiSdk\Models\PrewarmedEncoderPoolSchedule
     * @throws BitmovinApiException
     */
    public function get(string $poolId, string $scheduleId) : \BitmovinApiSdk\Models\PrewarmedEncoderPoolSchedule
    {
        $pathParams = [
            'pool_id' => $poolId,
            'schedule_id' => $scheduleId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/prewarmed-encoder-pools/{pool_id}/schedules/{schedule_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PrewarmedEncoderPoolSchedule::class);
    }

    /**
     * List prewarmed encoder pool schedules
     *
     * @param string $poolId
     * @param PrewarmedEncoderPoolScheduleListQueryParams|null $queryParams
     * @return PrewarmedEncoderPoolSchedulePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $poolId, PrewarmedEncoderPoolScheduleListQueryParams $queryParams = null) : PrewarmedEncoderPoolSchedulePaginationResponse
    {
        $pathParams = [
            'pool_id' => $poolId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/prewarmed-encoder-pools/{pool_id}/schedules', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, PrewarmedEncoderPoolSchedulePaginationResponse::class);
    }
}
