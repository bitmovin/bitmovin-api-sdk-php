<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Deinterlace;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\Deinterlace\Customdata\CustomdataApi;

class DeinterlaceApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * DeinterlaceApi constructor.
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
     * Create Deinterlace Filter
     *
     * @param \BitmovinApiSdk\Models\DeinterlaceFilter $deinterlaceFilter
     * @return \BitmovinApiSdk\Models\DeinterlaceFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DeinterlaceFilter $deinterlaceFilter) : \BitmovinApiSdk\Models\DeinterlaceFilter
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/filters/deinterlace', [],  null, $deinterlaceFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DeinterlaceFilter::class);
    }

    /**
     * Delete Deinterlace Filter
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
        $response = $this->httpWrapper->request('DELETE','/encoding/filters/deinterlace/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Deinterlace Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\DeinterlaceFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\DeinterlaceFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/filters/deinterlace/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DeinterlaceFilter::class);
    }

    /**
     * List Deinterlace Filters
     *
     * @param DeinterlaceFilterListQueryParams|null $queryParams
     * @return DeinterlaceFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DeinterlaceFilterListQueryParams $queryParams = null) : DeinterlaceFilterPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/filters/deinterlace', [], $queryParams, null, true);

        return ObjectMapper::map($response, DeinterlaceFilterPaginationResponse::class);
    }
}
