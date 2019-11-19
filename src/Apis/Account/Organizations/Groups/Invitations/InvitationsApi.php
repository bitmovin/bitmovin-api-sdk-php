<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Groups\Invitations;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class InvitationsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * InvitationsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Invitation to Group
     *
     * @param string $organizationId
     * @param string $groupId
     * @param \BitmovinApiSdk\Models\Invitation $invitation
     * @return \BitmovinApiSdk\Models\Invitation
     * @throws BitmovinApiException
     */
    public function create(string $organizationId, string $groupId, \BitmovinApiSdk\Models\Invitation $invitation) : \BitmovinApiSdk\Models\Invitation
    {
        $pathParams = [
            'organization_id' => $organizationId,
            'group_id' => $groupId,
        ];
        $response = $this->httpWrapper->request('POST','/account/organizations/{organization_id}/groups/{group_id}/invitations', $pathParams,  null, $invitation, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Invitation::class);
    }

    /**
     * List Invitations
     *
     * @param string $organizationId
     * @param string $groupId
     * @return InvitationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $organizationId, string $groupId) : InvitationPaginationResponse
    {
        $pathParams = [
            'organization_id' => $organizationId,
            'group_id' => $groupId,
        ];
        $response = $this->httpWrapper->request('GET','/account/organizations/{organization_id}/groups/{group_id}/invitations', $pathParams,  null, null, true);

        return ObjectMapper::map($response, InvitationPaginationResponse::class);
    }
}
