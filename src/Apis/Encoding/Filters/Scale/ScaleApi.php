<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Scale;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\Scale\Customdata\CustomdataApi;

class ScaleApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * ScaleApi constructor.
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
     * Create Scale Filter
     *
     * @param \BitmovinApiSdk\Models\ScaleFilter $scaleFilter
     * @return \BitmovinApiSdk\Models\ScaleFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\ScaleFilter $scaleFilter) : \BitmovinApiSdk\Models\ScaleFilter
    {
        $response = $this->httpWrapper->request('POST', '/encoding/filters/scale', [],  null, $scaleFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ScaleFilter::class);
    }

    /**
     * Delete Scale Filter
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/filters/scale/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Scale Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\ScaleFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\ScaleFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/filters/scale/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ScaleFilter::class);
    }

    /**
     * List Scale Filters
     *
     * @param ScaleFilterListQueryParams|null $queryParams
     * @return ScaleFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(ScaleFilterListQueryParams $queryParams = null) : ScaleFilterPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/filters/scale', [], $queryParams, null, true);

        return ObjectMapper::map($response, ScaleFilterPaginationResponse::class);
    }
}
