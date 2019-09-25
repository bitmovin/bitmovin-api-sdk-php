<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Rotate;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\Rotate\Customdata\CustomdataApi;

class RotateApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * RotateApi constructor.
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
     * Create Rotate Filter
     *
     * @param \BitmovinApiSdk\Models\RotateFilter $rotateFilter
     * @return \BitmovinApiSdk\Models\RotateFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\RotateFilter $rotateFilter) : \BitmovinApiSdk\Models\RotateFilter
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/filters/rotate', [],  null, $rotateFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\RotateFilter::class);
    }

    /**
     * Delete Rotate Filter
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
        $response = $this->httpWrapper->request('DELETE','/encoding/filters/rotate/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Rotate Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\RotateFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\RotateFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/filters/rotate/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\RotateFilter::class);
    }

    /**
     * List Rotate Filters
     *
     * @param RotateFilterListQueryParams|null $queryParams
     * @return RotateFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(RotateFilterListQueryParams $queryParams = null) : RotateFilterPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/filters/rotate', [], $queryParams, null, true);

        return ObjectMapper::map($response, RotateFilterPaginationResponse::class);
    }
}
