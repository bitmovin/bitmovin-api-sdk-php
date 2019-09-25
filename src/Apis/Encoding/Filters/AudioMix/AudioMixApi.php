<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\AudioMix;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\AudioMix\Customdata\CustomdataApi;

class AudioMixApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * AudioMixApi constructor.
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
     * Create Audio Mix Filter
     *
     * @param \BitmovinApiSdk\Models\AudioMixFilter $audioMixFilter
     * @return \BitmovinApiSdk\Models\AudioMixFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AudioMixFilter $audioMixFilter) : \BitmovinApiSdk\Models\AudioMixFilter
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/filters/audio-mix', [],  null, $audioMixFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AudioMixFilter::class);
    }

    /**
     * Delete Audio Mix Filter
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
        $response = $this->httpWrapper->request('DELETE','/encoding/filters/audio-mix/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Audio Mix Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\AudioMixFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\AudioMixFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/filters/audio-mix/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AudioMixFilter::class);
    }

    /**
     * List Audio Mix Filters
     *
     * @param AudioMixFilterListQueryParams|null $queryParams
     * @return AudioMixFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AudioMixFilterListQueryParams $queryParams = null) : AudioMixFilterPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/filters/audio-mix', [], $queryParams, null, true);

        return ObjectMapper::map($response, AudioMixFilterPaginationResponse::class);
    }
}
