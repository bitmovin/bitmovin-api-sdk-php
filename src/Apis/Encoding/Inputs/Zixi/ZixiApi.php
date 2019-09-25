<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Zixi;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\Zixi\Customdata\CustomdataApi;

class ZixiApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * ZixiApi constructor.
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
     * Create Zixi input
     *
     * @param \BitmovinApiSdk\Models\ZixiInput $zixiInput
     * @return \BitmovinApiSdk\Models\ZixiInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\ZixiInput $zixiInput) : \BitmovinApiSdk\Models\ZixiInput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/inputs/zixi', [],  null, $zixiInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ZixiInput::class);
    }

    /**
     * Delete Zixi input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\ZixiInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\ZixiInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/inputs/zixi/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ZixiInput::class);
    }

    /**
     * Zixi Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\ZixiInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\ZixiInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/zixi/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ZixiInput::class);
    }

    /**
     * List Zixi inputs
     *
     * @param ZixiInputListQueryParams|null $queryParams
     * @return ZixiInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(ZixiInputListQueryParams $queryParams = null) : ZixiInputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/zixi', [], $queryParams, null, true);

        return ObjectMapper::map($response, ZixiInputPaginationResponse::class);
    }
}
