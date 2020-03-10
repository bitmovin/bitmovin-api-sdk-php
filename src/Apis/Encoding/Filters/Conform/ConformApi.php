<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Conform;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\Conform\Customdata\CustomdataApi;

class ConformApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * ConformApi constructor.
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
     * Create Conform Filter. Keeps all the frames of the input. The playback time of the output will be slower or faster.
     *
     * @param \BitmovinApiSdk\Models\ConformFilter $conformFilter
     * @return \BitmovinApiSdk\Models\ConformFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\ConformFilter $conformFilter) : \BitmovinApiSdk\Models\ConformFilter
    {
        $response = $this->httpWrapper->request('POST', '/encoding/filters/conform', [],  null, $conformFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ConformFilter::class);
    }

    /**
     * Delete Conform Filter
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/filters/conform/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Conform Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\ConformFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\ConformFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/filters/conform/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ConformFilter::class);
    }

    /**
     * List Conform Filters
     *
     * @param ConformFilterListQueryParams|null $queryParams
     * @return ConformFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(ConformFilterListQueryParams $queryParams = null) : ConformFilterPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/filters/conform', [], $queryParams, null, true);

        return ObjectMapper::map($response, ConformFilterPaginationResponse::class);
    }
}
