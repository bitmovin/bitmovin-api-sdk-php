<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Tenants;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class TenantsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * TenantsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List all Tenants with their groups for a given organization
     *
     * @param string $organizationId
     * @return TenantWithGroupsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $organizationId) : TenantWithGroupsPaginationResponse
    {
        $pathParams = [
            'organization_id' => $organizationId,
        ];

        $response = $this->httpWrapper->request('GET', '/account/organizations/{organization_id}/tenants', $pathParams,  null, null, true);

        return ObjectMapper::map($response, TenantWithGroupsPaginationResponse::class);
    }
}
