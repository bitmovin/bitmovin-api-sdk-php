<?php

namespace BitmovinApiSdk\Apis\Analytics\Alerting\Incidents;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class IncidentsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * IncidentsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List Incidents
     *
     * @param AnalyticsIncidentListQueryParams|null $queryParams
     * @return AnalyticsIncidentPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AnalyticsIncidentListQueryParams $queryParams = null) : AnalyticsIncidentPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/analytics/alerting/incidents', [], $queryParams, null, true);

        return ObjectMapper::map($response, AnalyticsIncidentPaginationResponse::class);
    }

    /**
     * List Incidents per license
     *
     * @param string $licenseKey
     * @param AnalyticsIncidentListByLicenseKeyQueryParams|null $queryParams
     * @return AnalyticsIncidentPaginationResponse
     * @throws BitmovinApiException
     */
    public function listByLicenseKey(string $licenseKey, AnalyticsIncidentListByLicenseKeyQueryParams $queryParams = null) : AnalyticsIncidentPaginationResponse
    {
        $pathParams = [
            'license_key' => $licenseKey,
        ];

        $response = $this->httpWrapper->request('GET', '/analytics/alerting/incidents/{license_key}', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, AnalyticsIncidentPaginationResponse::class);
    }
}
