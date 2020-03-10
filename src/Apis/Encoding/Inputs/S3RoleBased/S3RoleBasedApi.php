<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\S3RoleBased;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\S3RoleBased\Customdata\CustomdataApi;

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
     * Create S3 Role-based Input
     *
     * @param \BitmovinApiSdk\Models\S3RoleBasedInput $s3RoleBasedInput
     * @return \BitmovinApiSdk\Models\S3RoleBasedInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\S3RoleBasedInput $s3RoleBasedInput) : \BitmovinApiSdk\Models\S3RoleBasedInput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/inputs/s3-role-based', [],  null, $s3RoleBasedInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\S3RoleBasedInput::class);
    }

    /**
     * Delete S3 Role-based Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\S3RoleBasedInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\S3RoleBasedInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/inputs/s3-role-based/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\S3RoleBasedInput::class);
    }

    /**
     * S3 Role-based Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\S3RoleBasedInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\S3RoleBasedInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/inputs/s3-role-based/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\S3RoleBasedInput::class);
    }

    /**
     * List S3 Role-based Inputs
     *
     * @param S3RoleBasedInputListQueryParams|null $queryParams
     * @return S3RoleBasedInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(S3RoleBasedInputListQueryParams $queryParams = null) : S3RoleBasedInputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/inputs/s3-role-based', [], $queryParams, null, true);

        return ObjectMapper::map($response, S3RoleBasedInputPaginationResponse::class);
    }
}
