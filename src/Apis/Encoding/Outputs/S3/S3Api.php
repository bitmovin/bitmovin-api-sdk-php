<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\S3;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Outputs\S3\Customdata\CustomdataApi;

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
     * Create S3 Output
     *
     * @param \BitmovinApiSdk\Models\S3Output $s3Output
     * @return \BitmovinApiSdk\Models\S3Output
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\S3Output $s3Output) : \BitmovinApiSdk\Models\S3Output
    {
        $response = $this->httpWrapper->request('POST', '/encoding/outputs/s3', [],  null, $s3Output, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\S3Output::class);
    }

    /**
     * Delete S3 Output
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\S3Output
     * @throws BitmovinApiException
     */
    public function delete(string $outputId) : \BitmovinApiSdk\Models\S3Output
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/outputs/s3/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\S3Output::class);
    }

    /**
     * S3 Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\S3Output
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\S3Output
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/outputs/s3/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\S3Output::class);
    }

    /**
     * List S3 Outputs
     *
     * @param S3OutputListQueryParams|null $queryParams
     * @return S3OutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(S3OutputListQueryParams $queryParams = null) : S3OutputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/outputs/s3', [], $queryParams, null, true);

        return ObjectMapper::map($response, S3OutputPaginationResponse::class);
    }
}
