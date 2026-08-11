<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\DolbyLoudness;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\DolbyLoudness\Customdata\CustomdataApi;

class DolbyLoudnessApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * DolbyLoudnessApi constructor.
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
     * Create Dolby Loudness Filter
     *
     * @param \BitmovinApiSdk\Models\DolbyLoudnessFilter $dolbyLoudnessFilter
     * @return \BitmovinApiSdk\Models\DolbyLoudnessFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DolbyLoudnessFilter $dolbyLoudnessFilter) : \BitmovinApiSdk\Models\DolbyLoudnessFilter
    {
        $response = $this->httpWrapper->request('POST', '/encoding/filters/dolby-loudness', [],  null, $dolbyLoudnessFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyLoudnessFilter::class);
    }

    /**
     * Delete Dolby Loudness Filter
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/filters/dolby-loudness/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get Dolby Loudness Filter details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\DolbyLoudnessFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\DolbyLoudnessFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/filters/dolby-loudness/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyLoudnessFilter::class);
    }

    /**
     * List Dolby Loudness Filters
     *
     * @param DolbyLoudnessFilterListQueryParams|null $queryParams
     * @return DolbyLoudnessFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DolbyLoudnessFilterListQueryParams $queryParams = null) : DolbyLoudnessFilterPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/filters/dolby-loudness', [], $queryParams, null, true);

        return ObjectMapper::map($response, DolbyLoudnessFilterPaginationResponse::class);
    }
}
