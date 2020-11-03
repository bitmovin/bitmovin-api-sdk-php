<?php

namespace BitmovinApiSdk\Apis\Analytics\Alerting\Rules\Threshold;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ThresholdApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ThresholdApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create Analytics Alerting Rule
     *
     * @param string $licenseKey
     * @param \BitmovinApiSdk\Models\AnalyticsAlertingRule $analyticsAlertingRule
     * @return \BitmovinApiSdk\Models\AnalyticsAlertingRule
     * @throws BitmovinApiException
     */
    public function create(string $licenseKey, \BitmovinApiSdk\Models\AnalyticsAlertingRule $analyticsAlertingRule) : \BitmovinApiSdk\Models\AnalyticsAlertingRule
    {
        $pathParams = [
            'license_key' => $licenseKey,
        ];

        $response = $this->httpWrapper->request('POST', '/analytics/alerting/rules/{license_key}/threshold', $pathParams,  null, $analyticsAlertingRule, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsAlertingRule::class);
    }

    /**
     * Update Analytics Alerting Rule
     *
     * @param string $licenseKey
     * @param string $ruleId
     * @param \BitmovinApiSdk\Models\AnalyticsAlertingRule $analyticsAlertingRule
     * @return \BitmovinApiSdk\Models\AnalyticsAlertingRule
     * @throws BitmovinApiException
     */
    public function update(string $licenseKey, string $ruleId, \BitmovinApiSdk\Models\AnalyticsAlertingRule $analyticsAlertingRule) : \BitmovinApiSdk\Models\AnalyticsAlertingRule
    {
        $pathParams = [
            'license_key' => $licenseKey,
            'rule_id' => $ruleId,
        ];

        $response = $this->httpWrapper->request('PUT', '/analytics/alerting/rules/{license_key}/threshold/{rule_id}', $pathParams,  null, $analyticsAlertingRule, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsAlertingRule::class);
    }
}
