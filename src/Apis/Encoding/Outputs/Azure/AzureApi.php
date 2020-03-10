<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Azure;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Outputs\Azure\Customdata\CustomdataApi;

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
     * Create Azure Output
     *
     * @param \BitmovinApiSdk\Models\AzureOutput $azureOutput
     * @return \BitmovinApiSdk\Models\AzureOutput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AzureOutput $azureOutput) : \BitmovinApiSdk\Models\AzureOutput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/outputs/azure', [],  null, $azureOutput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureOutput::class);
    }

    /**
     * Delete Azure Output
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\AzureOutput
     * @throws BitmovinApiException
     */
    public function delete(string $outputId) : \BitmovinApiSdk\Models\AzureOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/outputs/azure/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureOutput::class);
    }

    /**
     * Azure Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\AzureOutput
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\AzureOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/outputs/azure/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureOutput::class);
    }

    /**
     * List Azure Outputs
     *
     * @param AzureOutputListQueryParams|null $queryParams
     * @return AzureOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AzureOutputListQueryParams $queryParams = null) : AzureOutputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/outputs/azure', [], $queryParams, null, true);

        return ObjectMapper::map($response, AzureOutputPaginationResponse::class);
    }
}
