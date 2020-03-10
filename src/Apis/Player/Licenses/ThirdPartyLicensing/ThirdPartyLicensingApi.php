<?php

namespace BitmovinApiSdk\Apis\Player\Licenses\ThirdPartyLicensing;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ThirdPartyLicensingApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ThirdPartyLicensingApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Enable Third Party Licensing
     *
     * @param string $licenseId
     * @param \BitmovinApiSdk\Models\PlayerThirdPartyLicensing $playerThirdPartyLicensing
     * @return \BitmovinApiSdk\Models\PlayerThirdPartyLicensing
     * @throws BitmovinApiException
     */
    public function create(string $licenseId, \BitmovinApiSdk\Models\PlayerThirdPartyLicensing $playerThirdPartyLicensing) : \BitmovinApiSdk\Models\PlayerThirdPartyLicensing
    {
        $pathParams = [
            'license_id' => $licenseId,
        ];

        $response = $this->httpWrapper->request('POST', '/player/licenses/{license_id}/third-party-licensing', $pathParams,  null, $playerThirdPartyLicensing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PlayerThirdPartyLicensing::class);
    }

    /**
     * Delete Third Party Licensing Configuration
     *
     * @param string $licenseId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $licenseId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'license_id' => $licenseId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/player/licenses/{license_id}/third-party-licensing', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get Third Party Licensing Configuration
     *
     * @param string $licenseId
     * @return \BitmovinApiSdk\Models\PlayerThirdPartyLicensing
     * @throws BitmovinApiException
     */
    public function get(string $licenseId) : \BitmovinApiSdk\Models\PlayerThirdPartyLicensing
    {
        $pathParams = [
            'license_id' => $licenseId,
        ];

        $response = $this->httpWrapper->request('GET', '/player/licenses/{license_id}/third-party-licensing', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PlayerThirdPartyLicensing::class);
    }
}
