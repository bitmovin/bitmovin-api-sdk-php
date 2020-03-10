<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\EnhancedWatermark;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\EnhancedWatermark\Customdata\CustomdataApi;

class EnhancedWatermarkApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * EnhancedWatermarkApi constructor.
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
     * Create Enhanced Watermark Filter
     *
     * @param \BitmovinApiSdk\Models\EnhancedWatermarkFilter $enhancedWatermarkFilter
     * @return \BitmovinApiSdk\Models\EnhancedWatermarkFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\EnhancedWatermarkFilter $enhancedWatermarkFilter) : \BitmovinApiSdk\Models\EnhancedWatermarkFilter
    {
        $response = $this->httpWrapper->request('POST', '/encoding/filters/enhanced-watermark', [],  null, $enhancedWatermarkFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EnhancedWatermarkFilter::class);
    }

    /**
     * Delete Enhanced Watermark Filter
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/filters/enhanced-watermark/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Enhanced Watermark Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\EnhancedWatermarkFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\EnhancedWatermarkFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/filters/enhanced-watermark/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EnhancedWatermarkFilter::class);
    }

    /**
     * List Enhanced Watermark Filters
     *
     * @param EnhancedWatermarkFilterListQueryParams|null $queryParams
     * @return EnhancedWatermarkFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(EnhancedWatermarkFilterListQueryParams $queryParams = null) : EnhancedWatermarkFilterPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/filters/enhanced-watermark', [], $queryParams, null, true);

        return ObjectMapper::map($response, EnhancedWatermarkFilterPaginationResponse::class);
    }
}
