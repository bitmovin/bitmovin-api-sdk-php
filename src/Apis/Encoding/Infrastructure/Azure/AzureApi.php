<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Azure;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Infrastructure\Azure\Regions\RegionsApi;

class AzureApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var RegionsApi */
    public $regions;

    /**
     * AzureApi constructor.
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
     * Add Azure Account
     *
     * @param \BitmovinApiSdk\Models\AzureAccount $azureAccount
     * @return \BitmovinApiSdk\Models\AzureAccount
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AzureAccount $azureAccount) : \BitmovinApiSdk\Models\AzureAccount
    {
        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/azure', [],  null, $azureAccount, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureAccount::class);
    }

    /**
     * Delete Azure Account
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\AzureAccount
     * @throws BitmovinApiException
     */
    public function delete(string $infrastructureId) : \BitmovinApiSdk\Models\AzureAccount
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/infrastructure/azure/{infrastructure_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureAccount::class);
    }

    /**
     * Azure Account Details
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\AzureAccount
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId) : \BitmovinApiSdk\Models\AzureAccount
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/azure/{infrastructure_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureAccount::class);
    }

    /**
     * List Azure Accounts
     *
     * @param AzureAccountListQueryParams|null $queryParams
     * @return AzureAccountPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AzureAccountListQueryParams $queryParams = null) : AzureAccountPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/azure', [], $queryParams, null, true);

        return ObjectMapper::map($response, AzureAccountPaginationResponse::class);
    }
}
