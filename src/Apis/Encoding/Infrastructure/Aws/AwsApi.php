<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Aws;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Infrastructure\Aws\Regions\RegionsApi;

class AwsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var RegionsApi */
    public $regions;

    /**
     * AwsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->regions = new RegionsApi(null, $this->httpWrapper);
    }

    /**
     * Add AWS Account
     *
     * @param \BitmovinApiSdk\Models\AwsAccount $awsAccount
     * @return \BitmovinApiSdk\Models\AwsAccount
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AwsAccount $awsAccount) : \BitmovinApiSdk\Models\AwsAccount
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/infrastructure/aws', [],  null, $awsAccount, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AwsAccount::class);
    }

    /**
     * Delete AWS Account
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\AwsAccount
     * @throws BitmovinApiException
     */
    public function delete(string $infrastructureId) : \BitmovinApiSdk\Models\AwsAccount
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/infrastructure/aws/{infrastructure_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AwsAccount::class);
    }

    /**
     * AWS Account Details
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\AwsAccount
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId) : \BitmovinApiSdk\Models\AwsAccount
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/infrastructure/aws/{infrastructure_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AwsAccount::class);
    }

    /**
     * List AWS Accounts
     *
     * @param AwsAccountListQueryParams|null $queryParams
     * @return AwsAccountPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AwsAccountListQueryParams $queryParams = null) : AwsAccountPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/infrastructure/aws', [], $queryParams, null, true);

        return ObjectMapper::map($response, AwsAccountPaginationResponse::class);
    }
}
