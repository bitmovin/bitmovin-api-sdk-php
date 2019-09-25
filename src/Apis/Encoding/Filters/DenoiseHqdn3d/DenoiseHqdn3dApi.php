<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\DenoiseHqdn3d;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\DenoiseHqdn3d\Customdata\CustomdataApi;

class DenoiseHqdn3dApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * DenoiseHqdn3dApi constructor.
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
     * Create Denoise hqdn3d Filter
     *
     * @param \BitmovinApiSdk\Models\DenoiseHqdn3dFilter $denoiseHqdn3dFilter
     * @return \BitmovinApiSdk\Models\DenoiseHqdn3dFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DenoiseHqdn3dFilter $denoiseHqdn3dFilter) : \BitmovinApiSdk\Models\DenoiseHqdn3dFilter
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/filters/denoise-hqdn3d', [],  null, $denoiseHqdn3dFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DenoiseHqdn3dFilter::class);
    }

    /**
     * Delete Denoise hqdn3d Filter
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
        $response = $this->httpWrapper->request('DELETE','/encoding/filters/denoise-hqdn3d/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Denoise hqdn3d Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\DenoiseHqdn3dFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\DenoiseHqdn3dFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/filters/denoise-hqdn3d/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DenoiseHqdn3dFilter::class);
    }

    /**
     * List Denoise hqdn3d Filters
     *
     * @param DenoiseHqdn3dFilterListQueryParams|null $queryParams
     * @return DenoiseHqdn3dFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DenoiseHqdn3dFilterListQueryParams $queryParams = null) : DenoiseHqdn3dFilterPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/filters/denoise-hqdn3d', [], $queryParams, null, true);

        return ObjectMapper::map($response, DenoiseHqdn3dFilterPaginationResponse::class);
    }
}
