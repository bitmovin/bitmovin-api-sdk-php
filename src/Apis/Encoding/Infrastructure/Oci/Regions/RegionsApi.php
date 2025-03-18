<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Oci\Regions;

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
     * Add OCI account region settings
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\OciCloudRegion $region
     * @param \BitmovinApiSdk\Models\OciAccountRegionSettings $ociAccountRegionSettings
     * @return \BitmovinApiSdk\Models\OciAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function create(string $infrastructureId, \BitmovinApiSdk\Models\OciCloudRegion $region, \BitmovinApiSdk\Models\OciAccountRegionSettings $ociAccountRegionSettings) : \BitmovinApiSdk\Models\OciAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/oci/{infrastructure_id}/regions/{region}', $pathParams,  null, $ociAccountRegionSettings, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\OciAccountRegionSettings::class);
    }

    /**
     * Delete OCI account region settings
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\OciCloudRegion $region
     * @return \BitmovinApiSdk\Models\OciAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function delete(string $infrastructureId, \BitmovinApiSdk\Models\OciCloudRegion $region) : \BitmovinApiSdk\Models\OciAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/infrastructure/oci/{infrastructure_id}/regions/{region}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\OciAccountRegionSettings::class);
    }

    /**
     * OCI account region settings details
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\OciCloudRegion $region
     * @return \BitmovinApiSdk\Models\OciAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId, \BitmovinApiSdk\Models\OciCloudRegion $region) : \BitmovinApiSdk\Models\OciAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/oci/{infrastructure_id}/regions/{region}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\OciAccountRegionSettings::class);
    }

    /**
     * List OCI account region settings
     *
     * @param string $infrastructureId
     * @param OciAccountRegionSettingsListQueryParams|null $queryParams
     * @return OciAccountRegionSettingsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $infrastructureId, OciAccountRegionSettingsListQueryParams $queryParams = null) : OciAccountRegionSettingsPaginationResponse
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/oci/{infrastructure_id}/regions', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, OciAccountRegionSettingsPaginationResponse::class);
    }
}
