<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Akamai\Regions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class RegionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * RegionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Akamai account region settings
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\AkamaiCloudRegion $region
     * @param \BitmovinApiSdk\Models\AkamaiAccountRegionSettings $akamaiAccountRegionSettings
     * @return \BitmovinApiSdk\Models\AkamaiAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function create(string $infrastructureId, \BitmovinApiSdk\Models\AkamaiCloudRegion $region, \BitmovinApiSdk\Models\AkamaiAccountRegionSettings $akamaiAccountRegionSettings) : \BitmovinApiSdk\Models\AkamaiAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/akamai/{infrastructure_id}/regions/{region}', $pathParams,  null, $akamaiAccountRegionSettings, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiAccountRegionSettings::class);
    }

    /**
     * Delete Akamai account region settings
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\AkamaiCloudRegion $region
     * @return \BitmovinApiSdk\Models\AkamaiAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function delete(string $infrastructureId, \BitmovinApiSdk\Models\AkamaiCloudRegion $region) : \BitmovinApiSdk\Models\AkamaiAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/infrastructure/akamai/{infrastructure_id}/regions/{region}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiAccountRegionSettings::class);
    }

    /**
     * Akamai account region settings details
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\AkamaiCloudRegion $region
     * @return \BitmovinApiSdk\Models\AkamaiAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId, \BitmovinApiSdk\Models\AkamaiCloudRegion $region) : \BitmovinApiSdk\Models\AkamaiAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/akamai/{infrastructure_id}/regions/{region}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiAccountRegionSettings::class);
    }

    /**
     * List Akamai account region settings
     *
     * @param string $infrastructureId
     * @param AkamaiAccountRegionSettingsListQueryParams|null $queryParams
     * @return AkamaiAccountRegionSettingsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $infrastructureId, AkamaiAccountRegionSettingsListQueryParams $queryParams = null) : AkamaiAccountRegionSettingsPaginationResponse
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/akamai/{infrastructure_id}/regions', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, AkamaiAccountRegionSettingsPaginationResponse::class);
    }
}
