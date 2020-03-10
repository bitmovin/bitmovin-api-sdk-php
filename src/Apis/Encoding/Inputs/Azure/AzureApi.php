<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Azure;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\Azure\Customdata\CustomdataApi;

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
     * Create Azure Input
     *
     * @param \BitmovinApiSdk\Models\AzureInput $azureInput
     * @return \BitmovinApiSdk\Models\AzureInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AzureInput $azureInput) : \BitmovinApiSdk\Models\AzureInput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/inputs/azure', [],  null, $azureInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureInput::class);
    }

    /**
     * Delete Azure Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\AzureInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\AzureInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/inputs/azure/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureInput::class);
    }

    /**
     * Azure Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\AzureInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\AzureInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/inputs/azure/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureInput::class);
    }

    /**
     * List Azure Inputs
     *
     * @param AzureInputListQueryParams|null $queryParams
     * @return AzureInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AzureInputListQueryParams $queryParams = null) : AzureInputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/inputs/azure', [], $queryParams, null, true);

        return ObjectMapper::map($response, AzureInputPaginationResponse::class);
    }
}
