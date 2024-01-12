<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Invitations;

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
     * List all pending invitations of an org id
     *
     * @param string $organizationId
     * @return OrganizationPendingInvitationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $organizationId) : OrganizationPendingInvitationPaginationResponse
    {
        $pathParams = [
            'organization_id' => $organizationId,
        ];

        $response = $this->httpWrapper->request('GET', '/account/organizations/{organization_id}/invitations', $pathParams,  null, null, true);

        return ObjectMapper::map($response, OrganizationPendingInvitationPaginationResponse::class);
    }
}
