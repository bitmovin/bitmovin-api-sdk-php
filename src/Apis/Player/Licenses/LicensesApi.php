<?php

namespace BitmovinApiSdk\Apis\Player\Licenses;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Player\Licenses\Analytics\AnalyticsApi;
use BitmovinApiSdk\Apis\Player\Licenses\Domains\DomainsApi;
use BitmovinApiSdk\Apis\Player\Licenses\ThirdPartyLicensing\ThirdPartyLicensingApi;

class LicensesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var AnalyticsApi */
    public $analytics;

    /** @var DomainsApi */
    public $domains;

    /** @var ThirdPartyLicensingApi */
    public $thirdPartyLicensing;

    /**
     * LicensesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->analytics = new AnalyticsApi(null, $this->httpWrapper);
        $this->domains = new DomainsApi(null, $this->httpWrapper);
        $this->thirdPartyLicensing = new ThirdPartyLicensingApi(null, $this->httpWrapper);
    }

    /**
     * Create Player License
     *
     * @param \BitmovinApiSdk\Models\PlayerLicense $playerLicense
     * @return \BitmovinApiSdk\Models\PlayerLicense
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\PlayerLicense $playerLicense) : \BitmovinApiSdk\Models\PlayerLicense
    {
        
        $response = $this->httpWrapper->request('POST','/player/licenses', [],  null, $playerLicense, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PlayerLicense::class);
    }

    /**
     * Get License
     *
     * @param string $licenseId
     * @return \BitmovinApiSdk\Models\PlayerLicense
     * @throws BitmovinApiException
     */
    public function get(string $licenseId) : \BitmovinApiSdk\Models\PlayerLicense
    {
        $pathParams = [
            'license_id' => $licenseId,
        ];
        $response = $this->httpWrapper->request('GET','/player/licenses/{license_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PlayerLicense::class);
    }

    /**
     * List Player Licenses
     *
     * @param PlayerLicenseListQueryParams|null $queryParams
     * @return PlayerLicensePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(PlayerLicenseListQueryParams $queryParams = null) : PlayerLicensePaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/player/licenses', [], $queryParams, null, true);

        return ObjectMapper::map($response, PlayerLicensePaginationResponse::class);
    }
}
