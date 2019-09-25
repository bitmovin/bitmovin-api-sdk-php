<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Local;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Outputs\Local\Customdata\CustomdataApi;

class LocalApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * LocalApi constructor.
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
     * Create Local Output
     *
     * @param \BitmovinApiSdk\Models\LocalOutput $localOutput
     * @return \BitmovinApiSdk\Models\LocalOutput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\LocalOutput $localOutput) : \BitmovinApiSdk\Models\LocalOutput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/outputs/local', [],  null, $localOutput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LocalOutput::class);
    }

    /**
     * Delete Local Output
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\LocalOutput
     * @throws BitmovinApiException
     */
    public function delete(string $outputId) : \BitmovinApiSdk\Models\LocalOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/outputs/local/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LocalOutput::class);
    }

    /**
     * Local Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\LocalOutput
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\LocalOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/outputs/local/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LocalOutput::class);
    }

    /**
     * List Local Outputs
     *
     * @param LocalOutputListQueryParams|null $queryParams
     * @return LocalOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(LocalOutputListQueryParams $queryParams = null) : LocalOutputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/outputs/local', [], $queryParams, null, true);

        return ObjectMapper::map($response, LocalOutputPaginationResponse::class);
    }
}
