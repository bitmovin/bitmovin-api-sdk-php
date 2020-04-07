<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\GcsServiceAccount;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\GcsServiceAccount\Customdata\CustomdataApi;

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
     * Create Service Account based GCS Input
     *
     * @param \BitmovinApiSdk\Models\GcsServiceAccountInput $gcsServiceAccountInput
     * @return \BitmovinApiSdk\Models\GcsServiceAccountInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\GcsServiceAccountInput $gcsServiceAccountInput) : \BitmovinApiSdk\Models\GcsServiceAccountInput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/inputs/gcs-service-account', [],  null, $gcsServiceAccountInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsServiceAccountInput::class);
    }

    /**
     * Delete Service Account based GCS Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\GcsServiceAccountInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\GcsServiceAccountInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/inputs/gcs-service-account/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsServiceAccountInput::class);
    }

    /**
     * List Service Account based GCS Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\GcsServiceAccountInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\GcsServiceAccountInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/inputs/gcs-service-account/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsServiceAccountInput::class);
    }

    /**
     * List Service Account based GCS Inputs
     *
     * @param GcsServiceAccountInputListQueryParams|null $queryParams
     * @return GcsServiceAccountInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(GcsServiceAccountInputListQueryParams $queryParams = null) : GcsServiceAccountInputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/inputs/gcs-service-account', [], $queryParams, null, true);

        return ObjectMapper::map($response, GcsServiceAccountInputPaginationResponse::class);
    }
}
