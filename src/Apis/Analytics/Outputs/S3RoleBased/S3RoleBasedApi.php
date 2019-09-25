<?php

namespace BitmovinApiSdk\Apis\Analytics\Outputs\S3RoleBased;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Outputs\S3RoleBased\Customdata\CustomdataApi;

class S3RoleBasedApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * S3RoleBasedApi constructor.
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
     * Create S3 Role-based Output
     *
     * @param \BitmovinApiSdk\Models\S3RoleBasedOutput $s3RoleBasedOutput
     * @return \BitmovinApiSdk\Models\S3RoleBasedOutput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\S3RoleBasedOutput $s3RoleBasedOutput) : \BitmovinApiSdk\Models\S3RoleBasedOutput
    {
        
        $response = $this->httpWrapper->request('POST','/analytics/outputs/s3-role-based', [],  null, $s3RoleBasedOutput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\S3RoleBasedOutput::class);
    }

    /**
     * Delete S3 Role-based Output
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\S3RoleBasedOutput
     * @throws BitmovinApiException
     */
    public function delete(string $outputId) : \BitmovinApiSdk\Models\S3RoleBasedOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/analytics/outputs/s3-role-based/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\S3RoleBasedOutput::class);
    }

    /**
     * S3 Role-based Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\S3RoleBasedOutput
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\S3RoleBasedOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];
        $response = $this->httpWrapper->request('GET','/analytics/outputs/s3-role-based/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\S3RoleBasedOutput::class);
    }

    /**
     * List S3 Role-based Outputs
     *
     * @param S3RoleBasedOutputListQueryParams|null $queryParams
     * @return S3RoleBasedOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(S3RoleBasedOutputListQueryParams $queryParams = null) : S3RoleBasedOutputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/analytics/outputs/s3-role-based', [], $queryParams, null, true);

        return ObjectMapper::map($response, S3RoleBasedOutputPaginationResponse::class);
    }
}
