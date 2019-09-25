<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\GenericS3;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\GenericS3\Customdata\CustomdataApi;

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
     * Create Generic S3 Input
     *
     * @param \BitmovinApiSdk\Models\GenericS3Input $genericS3Input
     * @return \BitmovinApiSdk\Models\GenericS3Input
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\GenericS3Input $genericS3Input) : \BitmovinApiSdk\Models\GenericS3Input
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/inputs/generic-s3', [],  null, $genericS3Input, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GenericS3Input::class);
    }

    /**
     * Delete Generic S3 Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\GenericS3Input
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\GenericS3Input
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/inputs/generic-s3/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GenericS3Input::class);
    }

    /**
     * Generic S3 Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\GenericS3Input
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\GenericS3Input
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/generic-s3/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GenericS3Input::class);
    }

    /**
     * List Generic S3 Inputs
     *
     * @param GenericS3InputListQueryParams|null $queryParams
     * @return GenericS3InputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(GenericS3InputListQueryParams $queryParams = null) : GenericS3InputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/generic-s3', [], $queryParams, null, true);

        return ObjectMapper::map($response, GenericS3InputPaginationResponse::class);
    }
}
