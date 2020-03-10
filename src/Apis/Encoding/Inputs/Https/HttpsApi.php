<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Https;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\Https\Customdata\CustomdataApi;

class HttpsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * HttpsApi constructor.
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
     * Create HTTPS Input
     *
     * @param \BitmovinApiSdk\Models\HttpsInput $httpsInput
     * @return \BitmovinApiSdk\Models\HttpsInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\HttpsInput $httpsInput) : \BitmovinApiSdk\Models\HttpsInput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/inputs/https', [],  null, $httpsInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HttpsInput::class);
    }

    /**
     * Delete HTTPS Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\HttpsInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\HttpsInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/inputs/https/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HttpsInput::class);
    }

    /**
     * HTTPS Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\HttpsInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\HttpsInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/inputs/https/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HttpsInput::class);
    }

    /**
     * List HTTPS Inputs
     *
     * @param HttpsInputListQueryParams|null $queryParams
     * @return HttpsInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(HttpsInputListQueryParams $queryParams = null) : HttpsInputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/inputs/https', [], $queryParams, null, true);

        return ObjectMapper::map($response, HttpsInputPaginationResponse::class);
    }
}
