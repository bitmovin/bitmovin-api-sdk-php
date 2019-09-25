<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\Text;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\Text\Customdata\CustomdataApi;

class TextApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * TextApi constructor.
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
     * Create Text Filter
     *
     * @param \BitmovinApiSdk\Models\TextFilter $textFilter
     * @return \BitmovinApiSdk\Models\TextFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\TextFilter $textFilter) : \BitmovinApiSdk\Models\TextFilter
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/filters/text', [],  null, $textFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TextFilter::class);
    }

    /**
     * Delete Text Filter
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
        $response = $this->httpWrapper->request('DELETE','/encoding/filters/text/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Text Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\TextFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\TextFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/filters/text/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TextFilter::class);
    }

    /**
     * List Text Filters
     *
     * @param TextFilterListQueryParams|null $queryParams
     * @return TextFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(TextFilterListQueryParams $queryParams = null) : TextFilterPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/filters/text', [], $queryParams, null, true);

        return ObjectMapper::map($response, TextFilterPaginationResponse::class);
    }
}
