<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\GcsServiceAccount;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Outputs\GcsServiceAccount\Customdata\CustomdataApi;

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
     * @param \BitmovinApiSdk\Models\GcsServiceAccountOutput $gcsServiceAccountOutput
     * @return \BitmovinApiSdk\Models\GcsServiceAccountOutput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\GcsServiceAccountOutput $gcsServiceAccountOutput) : \BitmovinApiSdk\Models\GcsServiceAccountOutput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/outputs/gcs-service-account', [],  null, $gcsServiceAccountOutput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsServiceAccountOutput::class);
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/outputs/gcs-service-account/{output_id}', $pathParams,  null, null, true);

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

        $response = $this->httpWrapper->request('GET', '/encoding/outputs/gcs-service-account/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsServiceAccountOutput::class);
    }

    /**
     * List Service Account based GCS Outputs
     *
     * @param GcsServiceAccountOutputListQueryParams|null $queryParams
     * @return GcsServiceAccountOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(GcsServiceAccountOutputListQueryParams $queryParams = null) : GcsServiceAccountOutputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/outputs/gcs-service-account', [], $queryParams, null, true);

        return ObjectMapper::map($response, GcsServiceAccountOutputPaginationResponse::class);
    }
}
