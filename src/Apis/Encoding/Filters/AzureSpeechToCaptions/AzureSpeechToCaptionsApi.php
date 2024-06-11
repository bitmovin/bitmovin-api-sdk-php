<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\AzureSpeechToCaptions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\AzureSpeechToCaptions\Customdata\CustomdataApi;

class AzureSpeechToCaptionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * AzureSpeechToCaptionsApi constructor.
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
     * Create Azure Speech to captions Filter
     *
     * @param \BitmovinApiSdk\Models\AzureSpeechToCaptionsFilter $azureSpeechToCaptionsFilter
     * @return \BitmovinApiSdk\Models\AzureSpeechToCaptionsFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AzureSpeechToCaptionsFilter $azureSpeechToCaptionsFilter) : \BitmovinApiSdk\Models\AzureSpeechToCaptionsFilter
    {
        $response = $this->httpWrapper->request('POST', '/encoding/filters/azure-speech-to-captions', [],  null, $azureSpeechToCaptionsFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureSpeechToCaptionsFilter::class);
    }

    /**
     * Delete Azure Speech to captions Filter
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $filterId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/filters/azure-speech-to-captions/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Azure Speech to captions Filter details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\AzureSpeechToCaptionsFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\AzureSpeechToCaptionsFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/filters/azure-speech-to-captions/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AzureSpeechToCaptionsFilter::class);
    }

    /**
     * List Azure Speech to captions Filters
     *
     * @param AzureSpeechToCaptionsFilterListQueryParams|null $queryParams
     * @return AzureSpeechToCaptionsFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AzureSpeechToCaptionsFilterListQueryParams $queryParams = null) : AzureSpeechToCaptionsFilterPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/filters/azure-speech-to-captions', [], $queryParams, null, true);

        return ObjectMapper::map($response, AzureSpeechToCaptionsFilterPaginationResponse::class);
    }
}
