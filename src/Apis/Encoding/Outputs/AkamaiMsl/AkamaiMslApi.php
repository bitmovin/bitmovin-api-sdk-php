<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\AkamaiMsl;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Outputs\AkamaiMsl\Customdata\CustomdataApi;

class AkamaiMslApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * AkamaiMslApi constructor.
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
     * Create Akamai MSL Output
     *
     * @param \BitmovinApiSdk\Models\AkamaiMslOutput $akamaiMslOutput
     * @return \BitmovinApiSdk\Models\AkamaiMslOutput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AkamaiMslOutput $akamaiMslOutput) : \BitmovinApiSdk\Models\AkamaiMslOutput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/outputs/akamai-msl', [],  null, $akamaiMslOutput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiMslOutput::class);
    }

    /**
     * Delete Akamai MSL Output
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $outputId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/outputs/akamai-msl/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Akamai MSL Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\AkamaiMslOutput
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\AkamaiMslOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/outputs/akamai-msl/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AkamaiMslOutput::class);
    }

    /**
     * List Akamai MSL Outputs
     *
     * @param AkamaiMslOutputListQueryParams|null $queryParams
     * @return AkamaiMslOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AkamaiMslOutputListQueryParams $queryParams = null) : AkamaiMslOutputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/outputs/akamai-msl', [], $queryParams, null, true);

        return ObjectMapper::map($response, AkamaiMslOutputPaginationResponse::class);
    }
}
