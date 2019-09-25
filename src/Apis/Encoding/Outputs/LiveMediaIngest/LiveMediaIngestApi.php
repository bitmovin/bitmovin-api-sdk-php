<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\LiveMediaIngest;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Outputs\LiveMediaIngest\Customdata\CustomdataApi;

class LiveMediaIngestApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * LiveMediaIngestApi constructor.
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
     * Create Live Media Ingest Output
     *
     * @param \BitmovinApiSdk\Models\LiveMediaIngestOutput $liveMediaIngestOutput
     * @return \BitmovinApiSdk\Models\LiveMediaIngestOutput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\LiveMediaIngestOutput $liveMediaIngestOutput) : \BitmovinApiSdk\Models\LiveMediaIngestOutput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/outputs/live-media-ingest', [],  null, $liveMediaIngestOutput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveMediaIngestOutput::class);
    }

    /**
     * Delete Live Media Ingest Output
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
        $response = $this->httpWrapper->request('DELETE','/encoding/outputs/live-media-ingest/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Live Media Ingest Output Details
     *
     * @param string $outputId
     * @return \BitmovinApiSdk\Models\LiveMediaIngestOutput
     * @throws BitmovinApiException
     */
    public function get(string $outputId) : \BitmovinApiSdk\Models\LiveMediaIngestOutput
    {
        $pathParams = [
            'output_id' => $outputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/outputs/live-media-ingest/{output_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveMediaIngestOutput::class);
    }

    /**
     * List Live Media Ingest Outputs
     *
     * @param LiveMediaIngestOutputListQueryParams|null $queryParams
     * @return LiveMediaIngestOutputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(LiveMediaIngestOutputListQueryParams $queryParams = null) : LiveMediaIngestOutputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/outputs/live-media-ingest', [], $queryParams, null, true);

        return ObjectMapper::map($response, LiveMediaIngestOutputPaginationResponse::class);
    }
}
