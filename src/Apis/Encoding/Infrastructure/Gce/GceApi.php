<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Gce;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Infrastructure\Gce\Regions\RegionsApi;

class GceApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var RegionsApi */
    public $regions;

    /**
     * GceApi constructor.
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
     * Add GCE Account
     *
     * @param \BitmovinApiSdk\Models\GceAccount $gceAccount
     * @return \BitmovinApiSdk\Models\GceAccount
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\GceAccount $gceAccount) : \BitmovinApiSdk\Models\GceAccount
    {
        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/gce', [],  null, $gceAccount, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GceAccount::class);
    }

    /**
     * Delete GCE Account
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\GceAccount
     * @throws BitmovinApiException
     */
    public function delete(string $infrastructureId) : \BitmovinApiSdk\Models\GceAccount
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/infrastructure/gce/{infrastructure_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GceAccount::class);
    }

    /**
     * GCE Account Details
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\GceAccount
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId) : \BitmovinApiSdk\Models\GceAccount
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/gce/{infrastructure_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GceAccount::class);
    }

    /**
     * List GCE Accounts
     *
     * @param GceAccountListQueryParams|null $queryParams
     * @return GceAccountPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(GceAccountListQueryParams $queryParams = null) : GceAccountPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/gce', [], $queryParams, null, true);

        return ObjectMapper::map($response, GceAccountPaginationResponse::class);
    }
}
