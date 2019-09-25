<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Groups\Permissions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class PermissionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * PermissionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Set Group Permissions
     *
     * @param string $organizationId
     * @param string $groupId
     * @param \BitmovinApiSdk\Models\Acl $acl
     * @return \BitmovinApiSdk\Models\Acl
     * @throws BitmovinApiException
     */
    public function create(string $organizationId, string $groupId, \BitmovinApiSdk\Models\Acl $acl) : \BitmovinApiSdk\Models\Acl
    {
        $pathParams = [
            'organization_id' => $organizationId,
            'group_id' => $groupId,
        ];
        $response = $this->httpWrapper->request('POST','/account/organizations/{organization_id}/groups/{group_id}/permissions', $pathParams,  null, $acl, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Acl::class);
    }

    /**
     * Delete Permission
     *
     * @param string $organizationId
     * @param string $groupId
     * @param string $permissionId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $organizationId, string $groupId, string $permissionId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'organization_id' => $organizationId,
            'group_id' => $groupId,
            'permission_id' => $permissionId,
        ];
        $response = $this->httpWrapper->request('DELETE','/account/organizations/{organization_id}/groups/{group_id}/permissions/{permission_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get Group Permissions
     *
     * @param string $organizationId
     * @param string $groupId
     * @return AclPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $organizationId, string $groupId) : AclPaginationResponse
    {
        $pathParams = [
            'organization_id' => $organizationId,
            'group_id' => $groupId,
        ];
        $response = $this->httpWrapper->request('GET','/account/organizations/{organization_id}/groups/{group_id}/permissions', $pathParams,  null, null, true);

        return ObjectMapper::map($response, AclPaginationResponse::class);
    }
}
