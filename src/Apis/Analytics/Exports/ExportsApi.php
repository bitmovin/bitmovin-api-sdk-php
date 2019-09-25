<?php

namespace BitmovinApiSdk\Apis\Analytics\Exports;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class ExportsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ExportsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create Export Task
     *
     * @param \BitmovinApiSdk\Models\AnalyticsExportTask $analyticsExportTask
     * @return \BitmovinApiSdk\Models\AnalyticsExportTask
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsExportTask $analyticsExportTask) : \BitmovinApiSdk\Models\AnalyticsExportTask
    {
        
        $response = $this->httpWrapper->request('POST','/analytics/exports', [],  null, $analyticsExportTask, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsExportTask::class);
    }

    /**
     * Get export task
     *
     * @param string $exportTaskId
     * @return \BitmovinApiSdk\Models\AnalyticsExportTask
     * @throws BitmovinApiException
     */
    public function get(string $exportTaskId) : \BitmovinApiSdk\Models\AnalyticsExportTask
    {
        $pathParams = [
            'export_task_id' => $exportTaskId,
        ];
        $response = $this->httpWrapper->request('GET','/analytics/exports/{export_task_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsExportTask::class);
    }

    /**
     * List Export Tasks
     *
     * @param AnalyticsExportTaskListQueryParams|null $queryParams
     * @return AnalyticsExportTaskPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AnalyticsExportTaskListQueryParams $queryParams = null) : AnalyticsExportTaskPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/analytics/exports', [], $queryParams, null, true);

        return ObjectMapper::map($response, AnalyticsExportTaskPaginationResponse::class);
    }
}
