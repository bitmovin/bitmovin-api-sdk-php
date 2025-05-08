<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Groups;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Account\Organizations\Groups\Tenants\TenantsApi;
use BitmovinApiSdk\Apis\Account\Organizations\Groups\Invitations\InvitationsApi;
use BitmovinApiSdk\Apis\Account\Organizations\Groups\Permissions\PermissionsApi;

class GroupsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var TenantsApi */
    public $tenants;

    /** @var InvitationsApi */
    public $invitations;

    /** @var PermissionsApi */
    public $permissions;

    /**
     * GroupsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->tenants = new TenantsApi(null, $this->httpWrapper);
        $this->invitations = new InvitationsApi(null, $this->httpWrapper);
        $this->permissions = new PermissionsApi(null, $this->httpWrapper);
    }

    /**
     * Add Group
     *
     * @param string $organizationId
     * @param \BitmovinApiSdk\Models\Group $group
     * @return \BitmovinApiSdk\Models\Group
     * @throws BitmovinApiException
     */
    public function create(string $organizationId, \BitmovinApiSdk\Models\Group $group) : \BitmovinApiSdk\Models\Group
    {
        $pathParams = [
            'organization_id' => $organizationId,
        ];

        $response = $this->httpWrapper->request('POST', '/account/organizations/{organization_id}/groups', $pathParams,  null, $group, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Group::class);
    }

    /**
     * Delete Group
     *
     * @param string $organizationId
     * @param string $groupId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $organizationId, string $groupId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'organization_id' => $organizationId,
            'group_id' => $groupId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/account/organizations/{organization_id}/groups/{group_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Group Details
     *
     * @param string $organizationId
     * @param string $groupId
     * @return \BitmovinApiSdk\Models\Group
     * @throws BitmovinApiException
     */
    public function get(string $organizationId, string $groupId) : \BitmovinApiSdk\Models\Group
    {
        $pathParams = [
            'organization_id' => $organizationId,
            'group_id' => $groupId,
        ];

        $response = $this->httpWrapper->request('GET', '/account/organizations/{organization_id}/groups/{group_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Group::class);
    }

    /**
     * List Groups
     *
     * @param string $organizationId
     * @param GroupListQueryParams|null $queryParams
     * @return GroupPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $organizationId, GroupListQueryParams $queryParams = null) : GroupPaginationResponse
    {
        $pathParams = [
            'organization_id' => $organizationId,
        ];

        $response = $this->httpWrapper->request('GET', '/account/organizations/{organization_id}/groups', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, GroupPaginationResponse::class);
    }
}
