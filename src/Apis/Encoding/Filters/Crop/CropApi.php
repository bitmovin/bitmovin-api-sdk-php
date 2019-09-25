<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Crop;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\Crop\Customdata\CustomdataApi;

class CropApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * CropApi constructor.
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
     * Create Crop Filter
     *
     * @param \BitmovinApiSdk\Models\CropFilter $cropFilter
     * @return \BitmovinApiSdk\Models\CropFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\CropFilter $cropFilter) : \BitmovinApiSdk\Models\CropFilter
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/filters/crop', [],  null, $cropFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CropFilter::class);
    }

    /**
     * Delete Crop Filter
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
        $response = $this->httpWrapper->request('DELETE','/encoding/filters/crop/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Crop Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\CropFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\CropFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/filters/crop/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CropFilter::class);
    }

    /**
     * List Crop Filters
     *
     * @param CropFilterListQueryParams|null $queryParams
     * @return CropFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(CropFilterListQueryParams $queryParams = null) : CropFilterPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/filters/crop', [], $queryParams, null, true);

        return ObjectMapper::map($response, CropFilterPaginationResponse::class);
    }
}
