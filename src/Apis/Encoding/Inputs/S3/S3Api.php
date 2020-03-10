<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\S3;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\S3\Customdata\CustomdataApi;

class S3Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * S3Api constructor.
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
     * Create S3 Input
     *
     * @param \BitmovinApiSdk\Models\S3Input $s3Input
     * @return \BitmovinApiSdk\Models\S3Input
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\S3Input $s3Input) : \BitmovinApiSdk\Models\S3Input
    {
        $response = $this->httpWrapper->request('POST', '/encoding/inputs/s3', [],  null, $s3Input, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\S3Input::class);
    }

    /**
     * Delete S3 Input
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/inputs/s3/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * S3 Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\S3Input
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\S3Input
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/inputs/s3/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\S3Input::class);
    }

    /**
     * List S3 Inputs
     *
     * @param S3InputListQueryParams|null $queryParams
     * @return S3InputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(S3InputListQueryParams $queryParams = null) : S3InputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/inputs/s3', [], $queryParams, null, true);

        return ObjectMapper::map($response, S3InputPaginationResponse::class);
    }
}
