<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\GenericS3;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Outputs\GenericS3\Customdata\CustomdataApi;

class GenericS3Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * GenericS3Api constructor.
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
     * Create Generic S3 Output
     *
     * @param \BitmovinApiSdk\Models\GenericS3Output $genericS3Output
     * @return \BitmovinApiSdk\Models\GenericS3Output
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\GenericS3Output $genericS3Output) : \BitmovinApiSdk\Models\GenericS3Output
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/outputs/generic-s3', [],  null, $genericS3Output, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GenericS3Output::class);
    }

    /**
     * Delete Generic S3 Output
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\GenericS3Output
     * @throws BitmovinApiException
     */
    public function delete(string $outputId) : \BitmovinApiSdk\Models\GenericS3Output
    {
        $pathParams = [
            'output_id' => $outputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/outputs/generic-s3/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GenericS3Output::class);
    }

    /**
     * Generic S3 Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\GenericS3Output
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\GenericS3Output
    {
        $pathParams = [
            'output_id' => $outputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/outputs/generic-s3/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GenericS3Output::class);
    }

    /**
     * List Generic S3 Outputs
     *
     * @param GenericS3OutputListQueryParams|null $queryParams
     * @return GenericS3OutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(GenericS3OutputListQueryParams $queryParams = null) : GenericS3OutputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/outputs/generic-s3', [], $queryParams, null, true);

        return ObjectMapper::map($response, GenericS3OutputPaginationResponse::class);
    }
}
