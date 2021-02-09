<?php

namespace BitmovinApiSdk\Apis\Analytics\Outputs\GcsServiceAccount;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Outputs\GcsServiceAccount\Customdata\CustomdataApi;

class GcsServiceAccountApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * GcsServiceAccountApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
    }

    /**
     * Create Service Account based GCS Output
     *
     * @param \BitmovinApiSdk\Models\AnalyticsGcsServiceAccountOutput $analyticsGcsServiceAccountOutput
     * @return \BitmovinApiSdk\Models\AnalyticsGcsServiceAccountOutput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsGcsServiceAccountOutput $analyticsGcsServiceAccountOutput) : \BitmovinApiSdk\Models\AnalyticsGcsServiceAccountOutput
    {
        $response = $this->httpWrapper->request('POST', '/analytics/outputs/gcs-service-account', [],  null, $analyticsGcsServiceAccountOutput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsGcsServiceAccountOutput::class);
    }

    /**
     * Delete Service Account based GCS Output
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\GcsServiceAccountOutput
     * @throws BitmovinApiException
     */
    public function delete(string $outputId) : \BitmovinApiSdk\Models\GcsServiceAccountOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/analytics/outputs/gcs-service-account/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsServiceAccountOutput::class);
    }

    /**
     * Service Account based GCS Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\GcsServiceAccountOutput
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\GcsServiceAccountOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('GET', '/analytics/outputs/gcs-service-account/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsServiceAccountOutput::class);
    }

    /**
     * List Service Account based GCS Outputs
     *
     * @param AnalyticsGcsServiceAccountOutputListQueryParams|null $queryParams
     * @return AnalyticsGcsServiceAccountOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AnalyticsGcsServiceAccountOutputListQueryParams $queryParams = null) : AnalyticsGcsServiceAccountOutputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/analytics/outputs/gcs-service-account', [], $queryParams, null, true);

        return ObjectMapper::map($response, AnalyticsGcsServiceAccountOutputPaginationResponse::class);
    }
}
