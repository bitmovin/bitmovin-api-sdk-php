<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Gcs;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\Gcs\Customdata\CustomdataApi;

class GcsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * GcsApi constructor.
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
     * Create GCS Input
     *
     * @param \BitmovinApiSdk\Models\GcsInput $gcsInput
     * @return \BitmovinApiSdk\Models\GcsInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\GcsInput $gcsInput) : \BitmovinApiSdk\Models\GcsInput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/inputs/gcs', [],  null, $gcsInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsInput::class);
    }

    /**
     * Delete GCS Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\GcsInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\GcsInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/inputs/gcs/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsInput::class);
    }

    /**
     * GCS Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\GcsInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\GcsInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/gcs/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsInput::class);
    }

    /**
     * List GCS Inputs
     *
     * @param GcsInputListQueryParams|null $queryParams
     * @return GcsInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(GcsInputListQueryParams $queryParams = null) : GcsInputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/gcs', [], $queryParams, null, true);

        return ObjectMapper::map($response, GcsInputPaginationResponse::class);
    }
}
