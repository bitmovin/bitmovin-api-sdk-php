<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Interlace;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\Interlace\Customdata\CustomdataApi;

class InterlaceApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * InterlaceApi constructor.
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
     * Create Interlace Filter
     *
     * @param \BitmovinApiSdk\Models\InterlaceFilter $interlaceFilter
     * @return \BitmovinApiSdk\Models\InterlaceFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\InterlaceFilter $interlaceFilter) : \BitmovinApiSdk\Models\InterlaceFilter
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/filters/interlace', [],  null, $interlaceFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\InterlaceFilter::class);
    }

    /**
     * Delete Interlace Filter
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
        $response = $this->httpWrapper->request('DELETE','/encoding/filters/interlace/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Interlace Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\InterlaceFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\InterlaceFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/filters/interlace/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\InterlaceFilter::class);
    }

    /**
     * List Interlace Filters
     *
     * @param InterlaceFilterListQueryParams|null $queryParams
     * @return InterlaceFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(InterlaceFilterListQueryParams $queryParams = null) : InterlaceFilterPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/filters/interlace', [], $queryParams, null, true);

        return ObjectMapper::map($response, InterlaceFilterPaginationResponse::class);
    }
}
