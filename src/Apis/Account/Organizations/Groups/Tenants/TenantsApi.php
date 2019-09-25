<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Groups\Tenants;

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
     * Add Tenant to Group
     *
     * @param string $organizationId
     * @param string $groupId
     * @param \BitmovinApiSdk\Models\Tenant $tenant
     * @return \BitmovinApiSdk\Models\Tenant
     * @throws BitmovinApiException
     */
    public function create(string $organizationId, string $groupId, \BitmovinApiSdk\Models\Tenant $tenant) : \BitmovinApiSdk\Models\Tenant
    {
        $pathParams = [
            'organization_id' => $organizationId,
            'group_id' => $groupId,
        ];
        $response = $this->httpWrapper->request('POST','/account/organizations/{organization_id}/groups/{group_id}/tenants', $pathParams,  null, $tenant, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Tenant::class);
    }

    /**
     * Delete Tenant
     *
     * @param string $organizationId
     * @param string $groupId
     * @param string $tenantId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $organizationId, string $groupId, string $tenantId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'organization_id' => $organizationId,
            'group_id' => $groupId,
            'tenant_id' => $tenantId,
        ];
        $response = $this->httpWrapper->request('DELETE','/account/organizations/{organization_id}/groups/{group_id}/tenants/{tenant_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Tenant Details
     *
     * @param string $organizationId
     * @param string $groupId
     * @param string $tenantId
     * @return \BitmovinApiSdk\Models\Tenant
     * @throws BitmovinApiException
     */
    public function get(string $organizationId, string $groupId, string $tenantId) : \BitmovinApiSdk\Models\Tenant
    {
        $pathParams = [
            'organization_id' => $organizationId,
            'group_id' => $groupId,
            'tenant_id' => $tenantId,
        ];
        $response = $this->httpWrapper->request('GET','/account/organizations/{organization_id}/groups/{group_id}/tenants/{tenant_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Tenant::class);
    }

    /**
     * List Tenants
     *
     * @param string $organizationId
     * @param string $groupId
     * @return TenantPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $organizationId, string $groupId) : TenantPaginationResponse
    {
        $pathParams = [
            'organization_id' => $organizationId,
            'group_id' => $groupId,
        ];
        $response = $this->httpWrapper->request('GET','/account/organizations/{organization_id}/groups/{group_id}/tenants', $pathParams,  null, null, true);

        return ObjectMapper::map($response, TenantPaginationResponse::class);
    }
}
