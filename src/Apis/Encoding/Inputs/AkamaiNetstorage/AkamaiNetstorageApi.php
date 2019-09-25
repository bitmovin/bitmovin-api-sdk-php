<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\AkamaiNetstorage;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\AkamaiNetstorage\Customdata\CustomdataApi;

class AkamaiNetstorageApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * AkamaiNetstorageApi constructor.
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
     * Create Akamai NetStorage Input
     *
     * @param \BitmovinApiSdk\Models\AkamaiNetStorageInput $akamaiNetStorageInput
     * @return \BitmovinApiSdk\Models\AkamaiNetStorageInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AkamaiNetStorageInput $akamaiNetStorageInput) : \BitmovinApiSdk\Models\AkamaiNetStorageInput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/inputs/akamai-netstorage', [],  null, $akamaiNetStorageInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiNetStorageInput::class);
    }

    /**
     * Delete Akamai NetStorage Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\AkamaiNetStorageInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\AkamaiNetStorageInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/inputs/akamai-netstorage/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiNetStorageInput::class);
    }

    /**
     * Akamai NetStorage Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\AkamaiNetStorageInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\AkamaiNetStorageInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/akamai-netstorage/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiNetStorageInput::class);
    }

    /**
     * List Akamai NetStorage Inputs
     *
     * @param AkamaiNetStorageInputListQueryParams|null $queryParams
     * @return AkamaiNetStorageInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AkamaiNetStorageInputListQueryParams $queryParams = null) : AkamaiNetStorageInputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/akamai-netstorage', [], $queryParams, null, true);

        return ObjectMapper::map($response, AkamaiNetStorageInputPaginationResponse::class);
    }
}
