<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\SubOrganizations;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class SubOrganizationsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * SubOrganizationsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Organizations under given parent organization
     *
     * @param string $organizationId
     * @return OrganizationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $organizationId) : OrganizationPaginationResponse
    {
        $pathParams = [
            'organization_id' => $organizationId,
        ];

        $response = $this->httpWrapper->request('GET', '/account/organizations/{organization_id}/sub-organizations', $pathParams,  null, null, true);

        return ObjectMapper::map($response, OrganizationPaginationResponse::class);
    }
}
