<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Http;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\Http\Customdata\CustomdataApi;

class HttpApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * HttpApi constructor.
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
     * Create HTTP Input
     *
     * @param \BitmovinApiSdk\Models\HttpInput $httpInput
     * @return \BitmovinApiSdk\Models\HttpInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\HttpInput $httpInput) : \BitmovinApiSdk\Models\HttpInput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/inputs/http', [],  null, $httpInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HttpInput::class);
    }

    /**
     * Delete HTTP Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\HttpInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\HttpInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/inputs/http/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HttpInput::class);
    }

    /**
     * HTTP Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\HttpInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\HttpInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/http/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HttpInput::class);
    }

    /**
     * List HTTP Inputs
     *
     * @param HttpInputListQueryParams|null $queryParams
     * @return HttpInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(HttpInputListQueryParams $queryParams = null) : HttpInputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/http', [], $queryParams, null, true);

        return ObjectMapper::map($response, HttpInputPaginationResponse::class);
    }
}
