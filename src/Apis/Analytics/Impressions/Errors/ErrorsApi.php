<?php

namespace BitmovinApiSdk\Apis\Analytics\Impressions\Errors;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ErrorsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ErrorsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Impression Error Details
     *
     * @param string $impressionId
     * @param \BitmovinApiSdk\Models\AnalyticsLicenseKey $analyticsLicenseKey
     * @return \BitmovinApiSdk\Models\AnalyticsErrorDetailsResponse
     * @throws BitmovinApiException
     */
    public function create(string $impressionId, \BitmovinApiSdk\Models\AnalyticsLicenseKey $analyticsLicenseKey) : \BitmovinApiSdk\Models\AnalyticsErrorDetailsResponse
    {
        $pathParams = [
            'impression_id' => $impressionId,
        ];

        $response = $this->httpWrapper->request('POST', '/analytics/impressions/{impression_id}/errors', $pathParams,  null, $analyticsLicenseKey, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsErrorDetailsResponse::class);
    }
}
