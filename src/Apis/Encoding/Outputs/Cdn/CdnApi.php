<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Cdn;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class CdnApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * CdnApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * CDN Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\CdnOutput
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\CdnOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/outputs/cdn/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CdnOutput::class);
    }

    /**
     * List CDN Outputs
     *
     * @param CdnOutputListQueryParams|null $queryParams
     * @return CdnOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(CdnOutputListQueryParams $queryParams = null) : CdnOutputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/outputs/cdn', [], $queryParams, null, true);

        return ObjectMapper::map($response, CdnOutputPaginationResponse::class);
    }
}
