<?php

namespace BitmovinApiSdk\Apis\Player\Testing\CodecCompatibility;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class CodecCompatibilityApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * CodecCompatibilityApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Get Codec Compatibility Report
     *
     * @param PccReportGetQueryParams|null $queryParams
     * @return \BitmovinApiSdk\Models\PccReport
     * @throws BitmovinApiException
     */
    public function get(PccReportGetQueryParams $queryParams = null) : \BitmovinApiSdk\Models\PccReport
    {
        $response = $this->httpWrapper->request('GET', '/player/testing/codec-compatibility', [], $queryParams, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PccReport::class);
    }
}
