<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\EnhancedDeinterlace;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\EnhancedDeinterlace\Customdata\CustomdataApi;

class EnhancedDeinterlaceApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * EnhancedDeinterlaceApi constructor.
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
     * Create Enhanced Deinterlace Filter
     *
     * @param \BitmovinApiSdk\Models\EnhancedDeinterlaceFilter $enhancedDeinterlaceFilter
     * @return \BitmovinApiSdk\Models\EnhancedDeinterlaceFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\EnhancedDeinterlaceFilter $enhancedDeinterlaceFilter) : \BitmovinApiSdk\Models\EnhancedDeinterlaceFilter
    {
        $response = $this->httpWrapper->request('POST', '/encoding/filters/enhanced-deinterlace', [],  null, $enhancedDeinterlaceFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EnhancedDeinterlaceFilter::class);
    }

    /**
     * Delete Enhanced Deinterlace Filter
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/filters/enhanced-deinterlace/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Enhanced Deinterlace Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\EnhancedDeinterlaceFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\EnhancedDeinterlaceFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/filters/enhanced-deinterlace/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EnhancedDeinterlaceFilter::class);
    }

    /**
     * List Enhanced Deinterlace Filters
     *
     * @param EnhancedDeinterlaceFilterListQueryParams|null $queryParams
     * @return EnhancedDeinterlaceFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(EnhancedDeinterlaceFilterListQueryParams $queryParams = null) : EnhancedDeinterlaceFilterPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/filters/enhanced-deinterlace', [], $queryParams, null, true);

        return ObjectMapper::map($response, EnhancedDeinterlaceFilterPaginationResponse::class);
    }
}
