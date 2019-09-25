<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Watermark;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\Watermark\Customdata\CustomdataApi;

class WatermarkApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * WatermarkApi constructor.
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
     * Create Watermark Filter
     *
     * @param \BitmovinApiSdk\Models\WatermarkFilter $watermarkFilter
     * @return \BitmovinApiSdk\Models\WatermarkFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\WatermarkFilter $watermarkFilter) : \BitmovinApiSdk\Models\WatermarkFilter
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/filters/watermark', [],  null, $watermarkFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WatermarkFilter::class);
    }

    /**
     * Delete Watermark Filter
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
        $response = $this->httpWrapper->request('DELETE','/encoding/filters/watermark/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Watermark Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\WatermarkFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\WatermarkFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/filters/watermark/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WatermarkFilter::class);
    }

    /**
     * List Watermark Filters
     *
     * @param WatermarkFilterListQueryParams|null $queryParams
     * @return WatermarkFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(WatermarkFilterListQueryParams $queryParams = null) : WatermarkFilterPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/filters/watermark', [], $queryParams, null, true);

        return ObjectMapper::map($response, WatermarkFilterPaginationResponse::class);
    }
}
