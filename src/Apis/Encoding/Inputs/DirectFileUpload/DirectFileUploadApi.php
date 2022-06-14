<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\DirectFileUpload;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\DirectFileUpload\Customdata\CustomdataApi;

class DirectFileUploadApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * DirectFileUploadApi constructor.
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
     * Create Direct File Upload Input
     *
     * @param \BitmovinApiSdk\Models\DirectFileUploadInput $directFileUploadInput
     * @return \BitmovinApiSdk\Models\DirectFileUploadInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DirectFileUploadInput $directFileUploadInput) : \BitmovinApiSdk\Models\DirectFileUploadInput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/inputs/direct-file-upload', [],  null, $directFileUploadInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DirectFileUploadInput::class);
    }

    /**
     * Delete Direct File Upload Input
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/inputs/direct-file-upload/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Direct File Upload Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\DirectFileUploadInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\DirectFileUploadInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/inputs/direct-file-upload/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DirectFileUploadInput::class);
    }

    /**
     * List Direct File Upload Inputs
     *
     * @param DirectFileUploadInputListQueryParams|null $queryParams
     * @return DirectFileUploadInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DirectFileUploadInputListQueryParams $queryParams = null) : DirectFileUploadInputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/inputs/direct-file-upload', [], $queryParams, null, true);

        return ObjectMapper::map($response, DirectFileUploadInputPaginationResponse::class);
    }
}
