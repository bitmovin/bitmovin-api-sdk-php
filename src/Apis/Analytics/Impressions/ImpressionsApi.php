<?php

namespace BitmovinApiSdk\Apis\Analytics\Impressions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class ImpressionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ImpressionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Impression Details
     *
     * @param string $impressionId
     * @param \BitmovinApiSdk\Models\AnalyticsLicenseKey $analyticsLicenseKey
     * @return \BitmovinApiSdk\Models\AnalyticsImpressionDetails
     * @throws BitmovinApiException
     */
    public function create(string $impressionId, \BitmovinApiSdk\Models\AnalyticsLicenseKey $analyticsLicenseKey) : \BitmovinApiSdk\Models\AnalyticsImpressionDetails
    {
        $pathParams = [
            'impression_id' => $impressionId,
        ];
        $response = $this->httpWrapper->request('POST','/analytics/impressions/{impression_id}', $pathParams,  null, $analyticsLicenseKey, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsImpressionDetails::class);
    }
}
