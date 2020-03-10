<?php

namespace BitmovinApiSdk\Apis\Account\Organizations;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Account\Organizations\SubOrganizations\SubOrganizationsApi;
use BitmovinApiSdk\Apis\Account\Organizations\Groups\GroupsApi;

class OrganizationsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var SubOrganizationsApi */
    public $subOrganizations;

    /** @var GroupsApi */
    public $groups;

    /**
     * OrganizationsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->subOrganizations = new SubOrganizationsApi(null, $this->httpWrapper);
        $this->groups = new GroupsApi(null, $this->httpWrapper);
    }

    /**
     * Add Organization
     *
     * @param \BitmovinApiSdk\Models\Organization $organization
     * @return \BitmovinApiSdk\Models\Organization
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Organization $organization) : \BitmovinApiSdk\Models\Organization
    {
        $response = $this->httpWrapper->request('POST', '/account/organizations', [],  null, $organization, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Organization::class);
    }

    /**
     * Organization Details
     *
     * @param string $organizationId
     * @return \BitmovinApiSdk\Models\Organization
     * @throws BitmovinApiException
     */
    public function get(string $organizationId) : \BitmovinApiSdk\Models\Organization
    {
        $pathParams = [
            'organization_id' => $organizationId,
        ];

        $response = $this->httpWrapper->request('GET', '/account/organizations/{organization_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Organization::class);
    }

    /**
     * List Organizations
     *
     * @return OrganizationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list() : OrganizationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/account/organizations', [],  null, null, true);

        return ObjectMapper::map($response, OrganizationPaginationResponse::class);
    }

    /**
     * Update Organization
     *
     * @param string $organizationId
     * @param \BitmovinApiSdk\Models\UpdateOrganizationRequest $updateOrganizationRequest
     * @return \BitmovinApiSdk\Models\Organization
     * @throws BitmovinApiException
     */
    public function update(string $organizationId, \BitmovinApiSdk\Models\UpdateOrganizationRequest $updateOrganizationRequest) : \BitmovinApiSdk\Models\Organization
    {
        $pathParams = [
            'organization_id' => $organizationId,
        ];

        $response = $this->httpWrapper->request('PUT', '/account/organizations/{organization_id}', $pathParams,  null, $updateOrganizationRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Organization::class);
    }
}
