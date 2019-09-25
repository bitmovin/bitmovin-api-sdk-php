<?php

namespace BitmovinApiSdk\Apis\Analytics\Insights\Organizations\Settings;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class SettingsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * SettingsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Get the current organization settings for industry insights
     *
     * @param string $organizationId
     * @return \BitmovinApiSdk\Models\AnalyticsInsightsOrganizationSettings
     * @throws BitmovinApiException
     */
    public function get(string $organizationId) : \BitmovinApiSdk\Models\AnalyticsInsightsOrganizationSettings
    {
        $pathParams = [
            'organization_id' => $organizationId,
        ];
        $response = $this->httpWrapper->request('GET','/analytics/insights/organizations/{organization_id}/settings', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsInsightsOrganizationSettings::class);
    }

    /**
     * Update the organization settings for industry insights
     *
     * @param string $organizationId
     * @param \BitmovinApiSdk\Models\AnalyticsInsightsOrganizationSettingsRequest $analyticsInsightsOrganizationSettingsRequest
     * @return \BitmovinApiSdk\Models\AnalyticsInsightsOrganizationSettings
     * @throws BitmovinApiException
     */
    public function update(string $organizationId, \BitmovinApiSdk\Models\AnalyticsInsightsOrganizationSettingsRequest $analyticsInsightsOrganizationSettingsRequest) : \BitmovinApiSdk\Models\AnalyticsInsightsOrganizationSettings
    {
        $pathParams = [
            'organization_id' => $organizationId,
        ];
        $response = $this->httpWrapper->request('PUT','/analytics/insights/organizations/{organization_id}/settings', $pathParams,  null, $analyticsInsightsOrganizationSettingsRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsInsightsOrganizationSettings::class);
    }
}
