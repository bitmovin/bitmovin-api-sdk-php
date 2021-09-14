<?php

namespace BitmovinApiSdk\Apis\Analytics\VirtualLicenses;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class VirtualLicensesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * VirtualLicensesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create Virtual License
     *
     * @param \BitmovinApiSdk\Models\VirtualLicenseCreateRequest $virtualLicenseCreateRequest
     * @return \BitmovinApiSdk\Models\VirtualLicense
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\VirtualLicenseCreateRequest $virtualLicenseCreateRequest) : \BitmovinApiSdk\Models\VirtualLicense
    {
        $response = $this->httpWrapper->request('POST', '/analytics/virtual-licenses', [],  null, $virtualLicenseCreateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\VirtualLicense::class);
    }
}
