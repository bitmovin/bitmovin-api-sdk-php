<?php

namespace BitmovinApiSdk\Apis\Analytics\Alerting\Rules;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Alerting\Rules\Threshold\ThresholdApi;

class RulesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ThresholdApi */
    public $threshold;

    /**
     * RulesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->threshold = new ThresholdApi(null, $this->httpWrapper);
    }

    /**
     * Delete Analytics Alerting Rule By License Key And Id
     *
     * @param string $licenseKey
     * @param string $ruleId
     * @return \BitmovinApiSdk\Models\AnalyticsAlertingRule
     * @throws BitmovinApiException
     */
    public function delete(string $licenseKey, string $ruleId) : \BitmovinApiSdk\Models\AnalyticsAlertingRule
    {
        $pathParams = [
            'license_key' => $licenseKey,
            'rule_id' => $ruleId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/analytics/alerting/rules/{license_key}/{rule_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsAlertingRule::class);
    }

    /**
     * Get Analytics Alerting Rule By License Key And Id
     *
     * @param string $licenseKey
     * @param string $ruleId
     * @return \BitmovinApiSdk\Models\AnalyticsAlertingRule
     * @throws BitmovinApiException
     */
    public function get(string $licenseKey, string $ruleId) : \BitmovinApiSdk\Models\AnalyticsAlertingRule
    {
        $pathParams = [
            'license_key' => $licenseKey,
            'rule_id' => $ruleId,
        ];

        $response = $this->httpWrapper->request('GET', '/analytics/alerting/rules/{license_key}/{rule_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsAlertingRule::class);
    }

    /**
     * List Analytics Alerting Rules
     *
     * @param AnalyticsAlertingRuleListQueryParams|null $queryParams
     * @return AnalyticsAlertingRulePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AnalyticsAlertingRuleListQueryParams $queryParams = null) : AnalyticsAlertingRulePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/analytics/alerting/rules', [], $queryParams, null, true);

        return ObjectMapper::map($response, AnalyticsAlertingRulePaginationResponse::class);
    }
}
