<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Aws\Regions;

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
     * Add AWS Region Setting
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\AwsCloudRegion $region
     * @param \BitmovinApiSdk\Models\AwsAccountRegionSettings $awsAccountRegionSettings
     * @return \BitmovinApiSdk\Models\AwsAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function create(string $infrastructureId, \BitmovinApiSdk\Models\AwsCloudRegion $region, \BitmovinApiSdk\Models\AwsAccountRegionSettings $awsAccountRegionSettings) : \BitmovinApiSdk\Models\AwsAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/aws/{infrastructure_id}/regions/{region}', $pathParams,  null, $awsAccountRegionSettings, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AwsAccountRegionSettings::class);
    }

    /**
     * Delete AWS Region Settings
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\AwsCloudRegion $region
     * @return \BitmovinApiSdk\Models\AwsAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function delete(string $infrastructureId, \BitmovinApiSdk\Models\AwsCloudRegion $region) : \BitmovinApiSdk\Models\AwsAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/infrastructure/aws/{infrastructure_id}/regions/{region}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AwsAccountRegionSettings::class);
    }

    /**
     * AWS Region Settings Details
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\AwsCloudRegion $region
     * @return \BitmovinApiSdk\Models\AwsAccountRegionSettings
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId, \BitmovinApiSdk\Models\AwsCloudRegion $region) : \BitmovinApiSdk\Models\AwsAccountRegionSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'region' => $region,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/aws/{infrastructure_id}/regions/{region}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AwsAccountRegionSettings::class);
    }

    /**
     * List AWS Region Settings
     *
     * @param string $infrastructureId
     * @param AwsAccountRegionSettingsListQueryParams|null $queryParams
     * @return AwsAccountRegionSettingsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $infrastructureId, AwsAccountRegionSettingsListQueryParams $queryParams = null) : AwsAccountRegionSettingsPaginationResponse
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/aws/{infrastructure_id}/regions', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, AwsAccountRegionSettingsPaginationResponse::class);
    }
}
