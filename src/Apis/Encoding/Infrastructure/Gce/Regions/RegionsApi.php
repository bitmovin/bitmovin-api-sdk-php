<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Gce\Regions;

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
     * Add Google Cloud Region Setting
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\GoogleCloudRegion $region
     * @param \BitmovinApiSdk\Models\GceAccountRegionSettings $gceAccountRegionSettings
     * @return \BitmovinApiSdk\Models\GceAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function create(string $infrastructureId, \BitmovinApiSdk\Models\GoogleCloudRegion $region, \BitmovinApiSdk\Models\GceAccountRegionSettings $gceAccountRegionSettings) : \BitmovinApiSdk\Models\GceAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/gce/{infrastructure_id}/regions/{region}', $pathParams,  null, $gceAccountRegionSettings, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GceAccountRegionSettings::class);
    }

    /**
     * Delete Google Cloud Region Settings
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\GoogleCloudRegion $region
     * @return \BitmovinApiSdk\Models\GceAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function delete(string $infrastructureId, \BitmovinApiSdk\Models\GoogleCloudRegion $region) : \BitmovinApiSdk\Models\GceAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/infrastructure/gce/{infrastructure_id}/regions/{region}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GceAccountRegionSettings::class);
    }

    /**
     * Google Cloud Region Settings Details
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\GoogleCloudRegion $region
     * @return \BitmovinApiSdk\Models\GceAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId, \BitmovinApiSdk\Models\GoogleCloudRegion $region) : \BitmovinApiSdk\Models\GceAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/gce/{infrastructure_id}/regions/{region}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GceAccountRegionSettings::class);
    }

    /**
     * List Google Cloud Region Settings
     *
     * @param string $infrastructureId
     * @param GceAccountRegionSettingsListQueryParams|null $queryParams
     * @return GceAccountRegionSettingsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $infrastructureId, GceAccountRegionSettingsListQueryParams $queryParams = null) : GceAccountRegionSettingsPaginationResponse
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/gce/{infrastructure_id}/regions', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, GceAccountRegionSettingsPaginationResponse::class);
    }
}
