<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Akamai;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Infrastructure\Akamai\Regions\RegionsApi;

class AkamaiApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var RegionsApi */
    public $regions;

    /**
     * AkamaiApi constructor.
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
     * Add Akamai account
     *
     * @param \BitmovinApiSdk\Models\AkamaiAccount $akamaiAccount
     * @return \BitmovinApiSdk\Models\AkamaiAccount
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AkamaiAccount $akamaiAccount) : \BitmovinApiSdk\Models\AkamaiAccount
    {
        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/akamai', [],  null, $akamaiAccount, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiAccount::class);
    }

    /**
     * Delete Akamai account
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\AkamaiAccount
     * @throws BitmovinApiException
     */
    public function delete(string $infrastructureId) : \BitmovinApiSdk\Models\AkamaiAccount
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/infrastructure/akamai/{infrastructure_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiAccount::class);
    }

    /**
     * Akamai account details
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\AkamaiAccount
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId) : \BitmovinApiSdk\Models\AkamaiAccount
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/akamai/{infrastructure_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiAccount::class);
    }

    /**
     * List Akamai accounts
     *
     * @param AkamaiAccountListQueryParams|null $queryParams
     * @return AkamaiAccountPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AkamaiAccountListQueryParams $queryParams = null) : AkamaiAccountPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/akamai', [], $queryParams, null, true);

        return ObjectMapper::map($response, AkamaiAccountPaginationResponse::class);
    }
}
