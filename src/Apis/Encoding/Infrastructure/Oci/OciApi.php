<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Oci;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Infrastructure\Oci\Regions\RegionsApi;

class OciApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var RegionsApi */
    public $regions;

    /**
     * OciApi constructor.
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
     * Add OCI account
     *
     * @param \BitmovinApiSdk\Models\OciAccount $ociAccount
     * @return \BitmovinApiSdk\Models\OciAccount
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\OciAccount $ociAccount) : \BitmovinApiSdk\Models\OciAccount
    {
        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/oci', [],  null, $ociAccount, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\OciAccount::class);
    }

    /**
     * Delete OCI account
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\OciAccount
     * @throws BitmovinApiException
     */
    public function delete(string $infrastructureId) : \BitmovinApiSdk\Models\OciAccount
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/infrastructure/oci/{infrastructure_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\OciAccount::class);
    }

    /**
     * OCI account details
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\OciAccount
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId) : \BitmovinApiSdk\Models\OciAccount
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/oci/{infrastructure_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\OciAccount::class);
    }

    /**
     * List OCI accounts
     *
     * @param OciAccountListQueryParams|null $queryParams
     * @return OciAccountPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(OciAccountListQueryParams $queryParams = null) : OciAccountPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/oci', [], $queryParams, null, true);

        return ObjectMapper::map($response, OciAccountPaginationResponse::class);
    }
}
