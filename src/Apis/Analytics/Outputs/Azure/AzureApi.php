<?php

namespace BitmovinApiSdk\Apis\Analytics\Outputs\Azure;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Outputs\Azure\Customdata\CustomdataApi;

class AzureApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * AzureApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
    }

    /**
     * Create Microsoft Azure Output
     *
     * @param \BitmovinApiSdk\Models\AnalyticsAzureOutput $analyticsAzureOutput
     * @return \BitmovinApiSdk\Models\AnalyticsAzureOutput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AnalyticsAzureOutput $analyticsAzureOutput) : \BitmovinApiSdk\Models\AnalyticsAzureOutput
    {
        $response = $this->httpWrapper->request('POST', '/analytics/outputs/azure', [],  null, $analyticsAzureOutput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsAzureOutput::class);
    }

    /**
     * Delete Microsoft Azure Output
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\AnalyticsAzureOutput
     * @throws BitmovinApiException
     */
    public function delete(string $outputId) : \BitmovinApiSdk\Models\AnalyticsAzureOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/analytics/outputs/azure/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsAzureOutput::class);
    }

    /**
     * Microsoft Azure Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\AnalyticsAzureOutput
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\AnalyticsAzureOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('GET', '/analytics/outputs/azure/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AnalyticsAzureOutput::class);
    }

    /**
     * List Microsoft Azure Outputs
     *
     * @param AnalyticsAzureOutputListQueryParams|null $queryParams
     * @return AnalyticsAzureOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AnalyticsAzureOutputListQueryParams $queryParams = null) : AnalyticsAzureOutputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/analytics/outputs/azure', [], $queryParams, null, true);

        return ObjectMapper::map($response, AnalyticsAzureOutputPaginationResponse::class);
    }
}
