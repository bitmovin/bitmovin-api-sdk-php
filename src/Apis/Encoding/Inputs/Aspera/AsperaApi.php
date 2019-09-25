<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Aspera;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\Aspera\Customdata\CustomdataApi;

class AsperaApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * AsperaApi constructor.
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
     * Create Aspera Input
     *
     * @param \BitmovinApiSdk\Models\AsperaInput $asperaInput
     * @return \BitmovinApiSdk\Models\AsperaInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AsperaInput $asperaInput) : \BitmovinApiSdk\Models\AsperaInput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/inputs/aspera', [],  null, $asperaInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AsperaInput::class);
    }

    /**
     * Delete Aspera Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\AsperaInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\AsperaInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/inputs/aspera/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AsperaInput::class);
    }

    /**
     * Aspera Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\AsperaInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\AsperaInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/aspera/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AsperaInput::class);
    }

    /**
     * List Aspera Inputs
     *
     * @param AsperaInputListQueryParams|null $queryParams
     * @return AsperaInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AsperaInputListQueryParams $queryParams = null) : AsperaInputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/aspera', [], $queryParams, null, true);

        return ObjectMapper::map($response, AsperaInputPaginationResponse::class);
    }
}
