<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\AudioVolume;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\AudioVolume\Customdata\CustomdataApi;

class AudioVolumeApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * AudioVolumeApi constructor.
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
     * Create Audio Volume Filter
     *
     * @param \BitmovinApiSdk\Models\AudioVolumeFilter $audioVolumeFilter
     * @return \BitmovinApiSdk\Models\AudioVolumeFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AudioVolumeFilter $audioVolumeFilter) : \BitmovinApiSdk\Models\AudioVolumeFilter
    {
        $response = $this->httpWrapper->request('POST', '/encoding/filters/audio-volume', [],  null, $audioVolumeFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AudioVolumeFilter::class);
    }

    /**
     * Delete Audio Volume Filter
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/filters/audio-volume/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Audio Volume Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\AudioVolumeFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\AudioVolumeFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/filters/audio-volume/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AudioVolumeFilter::class);
    }

    /**
     * List Audio Volume Filters
     *
     * @param AudioVolumeFilterListQueryParams|null $queryParams
     * @return AudioVolumeFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AudioVolumeFilterListQueryParams $queryParams = null) : AudioVolumeFilterPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/filters/audio-volume', [], $queryParams, null, true);

        return ObjectMapper::map($response, AudioVolumeFilterPaginationResponse::class);
    }
}
