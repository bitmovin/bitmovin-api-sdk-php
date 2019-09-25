<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Local;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\Local\Customdata\CustomdataApi;

class LocalApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * LocalApi constructor.
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
     * Create Local Input
     *
     * @param \BitmovinApiSdk\Models\LocalInput $localInput
     * @return \BitmovinApiSdk\Models\LocalInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\LocalInput $localInput) : \BitmovinApiSdk\Models\LocalInput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/inputs/local', [],  null, $localInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LocalInput::class);
    }

    /**
     * Delete Local Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/inputs/local/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Local Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\LocalInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\LocalInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/local/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LocalInput::class);
    }

    /**
     * List Local Inputs
     *
     * @param LocalInputListQueryParams|null $queryParams
     * @return LocalInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(LocalInputListQueryParams $queryParams = null) : LocalInputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/local', [], $queryParams, null, true);

        return ObjectMapper::map($response, LocalInputPaginationResponse::class);
    }
}
