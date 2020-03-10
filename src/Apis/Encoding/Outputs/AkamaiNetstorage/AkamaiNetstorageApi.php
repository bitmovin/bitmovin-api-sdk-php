<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\AkamaiNetstorage;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Outputs\AkamaiNetstorage\Customdata\CustomdataApi;

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
     * Create Akamai NetStorage Output
     *
     * @param \BitmovinApiSdk\Models\AkamaiNetStorageOutput $akamaiNetStorageOutput
     * @return \BitmovinApiSdk\Models\AkamaiNetStorageOutput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AkamaiNetStorageOutput $akamaiNetStorageOutput) : \BitmovinApiSdk\Models\AkamaiNetStorageOutput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/outputs/akamai-netstorage', [],  null, $akamaiNetStorageOutput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiNetStorageOutput::class);
    }

    /**
     * Delete Akamai NetStorage Output
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\AkamaiNetStorageOutput
     * @throws BitmovinApiException
     */
    public function delete(string $outputId) : \BitmovinApiSdk\Models\AkamaiNetStorageOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/outputs/akamai-netstorage/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiNetStorageOutput::class);
    }

    /**
     * Akamai NetStorage Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\AkamaiNetStorageOutput
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\AkamaiNetStorageOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/outputs/akamai-netstorage/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiNetStorageOutput::class);
    }

    /**
     * List Akamai NetStorage Outputs
     *
     * @param AkamaiNetStorageOutputListQueryParams|null $queryParams
     * @return AkamaiNetStorageOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AkamaiNetStorageOutputListQueryParams $queryParams = null) : AkamaiNetStorageOutputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/outputs/akamai-netstorage', [], $queryParams, null, true);

        return ObjectMapper::map($response, AkamaiNetStorageOutputPaginationResponse::class);
    }
}
