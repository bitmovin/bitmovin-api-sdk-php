<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\EbuR128SinglePass;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Filters\EbuR128SinglePass\Customdata\CustomdataApi;

class EbuR128SinglePassApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * EbuR128SinglePassApi constructor.
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
     * Create EBU R128 Single Pass Filter
     *
     * @param \BitmovinApiSdk\Models\EbuR128SinglePassFilter $ebuR128SinglePassFilter
     * @return \BitmovinApiSdk\Models\EbuR128SinglePassFilter
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\EbuR128SinglePassFilter $ebuR128SinglePassFilter) : \BitmovinApiSdk\Models\EbuR128SinglePassFilter
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/filters/ebu-r128-single-pass', [],  null, $ebuR128SinglePassFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EbuR128SinglePassFilter::class);
    }

    /**
     * Delete EBU R128 Single Pass Filter
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
        $response = $this->httpWrapper->request('DELETE','/encoding/filters/ebu-r128-single-pass/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * EBU R128 Single Pass Filter Details
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\EbuR128SinglePassFilter
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\EbuR128SinglePassFilter
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/filters/ebu-r128-single-pass/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EbuR128SinglePassFilter::class);
    }

    /**
     * List EBU R128 Single Pass Filters
     *
     * @param EbuR128SinglePassFilterListQueryParams|null $queryParams
     * @return EbuR128SinglePassFilterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(EbuR128SinglePassFilterListQueryParams $queryParams = null) : EbuR128SinglePassFilterPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/filters/ebu-r128-single-pass', [], $queryParams, null, true);

        return ObjectMapper::map($response, EbuR128SinglePassFilterPaginationResponse::class);
    }
}
