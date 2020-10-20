<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Azure\Regions;

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
     * Add Azure Region Setting
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\AzureCloudRegion $region
     * @param \BitmovinApiSdk\Models\AzureAccountRegionSettings $azureAccountRegionSettings
     * @return \BitmovinApiSdk\Models\AzureAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function create(string $infrastructureId, \BitmovinApiSdk\Models\AzureCloudRegion $region, \BitmovinApiSdk\Models\AzureAccountRegionSettings $azureAccountRegionSettings) : \BitmovinApiSdk\Models\AzureAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/azure/{infrastructure_id}/regions/{region}', $pathParams,  null, $azureAccountRegionSettings, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureAccountRegionSettings::class);
    }

    /**
     * Delete Azure Region Settings
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\AzureCloudRegion $region
     * @return \BitmovinApiSdk\Models\AzureAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function delete(string $infrastructureId, \BitmovinApiSdk\Models\AzureCloudRegion $region) : \BitmovinApiSdk\Models\AzureAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/infrastructure/azure/{infrastructure_id}/regions/{region}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureAccountRegionSettings::class);
    }

    /**
     * Azure Region Settings Details
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\AzureCloudRegion $region
     * @return \BitmovinApiSdk\Models\AzureAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId, \BitmovinApiSdk\Models\AzureCloudRegion $region) : \BitmovinApiSdk\Models\AzureAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/azure/{infrastructure_id}/regions/{region}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureAccountRegionSettings::class);
    }

    /**
     * List Azure Region Settings
     *
     * @param string $infrastructureId
     * @param AzureAccountRegionSettingsListQueryParams|null $queryParams
     * @return AzureAccountRegionSettingsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $infrastructureId, AzureAccountRegionSettingsListQueryParams $queryParams = null) : AzureAccountRegionSettingsPaginationResponse
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/azure/{infrastructure_id}/regions', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, AzureAccountRegionSettingsPaginationResponse::class);
    }
}
