<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Unsharp;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\Unsharp\Customdata\CustomdataApi;

class UnsharpApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * UnsharpApi constructor.
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
     * Create Unsharp Filter
     *
     * @param \BitmovinApiSdk\Models\UnsharpFilter $unsharpFilter
     * @return \BitmovinApiSdk\Models\UnsharpFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\UnsharpFilter $unsharpFilter) : \BitmovinApiSdk\Models\UnsharpFilter
    {
        $response = $this->httpWrapper->request('POST', '/encoding/filters/unsharp', [],  null, $unsharpFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\UnsharpFilter::class);
    }

    /**
     * Delete Unsharp Filter
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/filters/unsharp/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Unsharp Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\UnsharpFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\UnsharpFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/filters/unsharp/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\UnsharpFilter::class);
    }

    /**
     * List Unsharp Filters
     *
     * @param UnsharpFilterListQueryParams|null $queryParams
     * @return UnsharpFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(UnsharpFilterListQueryParams $queryParams = null) : UnsharpFilterPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/filters/unsharp', [], $queryParams, null, true);

        return ObjectMapper::map($response, UnsharpFilterPaginationResponse::class);
    }
}
