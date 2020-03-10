<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Gcs;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Outputs\Gcs\Customdata\CustomdataApi;

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
     * Create GCS Output
     *
     * @param \BitmovinApiSdk\Models\GcsOutput $gcsOutput
     * @return \BitmovinApiSdk\Models\GcsOutput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\GcsOutput $gcsOutput) : \BitmovinApiSdk\Models\GcsOutput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/outputs/gcs', [],  null, $gcsOutput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsOutput::class);
    }

    /**
     * Delete GCS Output
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\GcsOutput
     * @throws BitmovinApiException
     */
    public function delete(string $outputId) : \BitmovinApiSdk\Models\GcsOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/outputs/gcs/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsOutput::class);
    }

    /**
     * GCS Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\GcsOutput
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\GcsOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/outputs/gcs/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\GcsOutput::class);
    }

    /**
     * List GCS Outputs
     *
     * @param GcsOutputListQueryParams|null $queryParams
     * @return GcsOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(GcsOutputListQueryParams $queryParams = null) : GcsOutputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/outputs/gcs', [], $queryParams, null, true);

        return ObjectMapper::map($response, GcsOutputPaginationResponse::class);
    }
}
