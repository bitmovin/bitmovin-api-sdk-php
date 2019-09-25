<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Srt;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\Srt\Customdata\CustomdataApi;

class SrtApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * SrtApi constructor.
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
     * Create SRT input
     *
     * @param \BitmovinApiSdk\Models\SrtInput $srtInput
     * @return \BitmovinApiSdk\Models\SrtInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\SrtInput $srtInput) : \BitmovinApiSdk\Models\SrtInput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/inputs/srt', [],  null, $srtInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SrtInput::class);
    }

    /**
     * Delete SRT input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\SrtInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\SrtInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/inputs/srt/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SrtInput::class);
    }

    /**
     * SRT Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\SrtInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\SrtInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/srt/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SrtInput::class);
    }

    /**
     * List SRT inputs
     *
     * @param SrtInputListQueryParams|null $queryParams
     * @return SrtInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(SrtInputListQueryParams $queryParams = null) : SrtInputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/srt', [], $queryParams, null, true);

        return ObjectMapper::map($response, SrtInputPaginationResponse::class);
    }
}
