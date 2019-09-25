<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\CustomXmlElements\CustomXmlElementsApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\AdaptationsetsApi;

class PeriodsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomXmlElementsApi */
    public $customXmlElements;

    /** @var AdaptationsetsApi */
    public $adaptationsets;

    /**
     * PeriodsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customXmlElements = new CustomXmlElementsApi(null, $this->httpWrapper);
        $this->adaptationsets = new AdaptationsetsApi(null, $this->httpWrapper);
    }

    /**
     * Add Period
     *
     * @param string $manifestId
     * @param \BitmovinApiSdk\Models\Period $period
     * @return \BitmovinApiSdk\Models\Period
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, \BitmovinApiSdk\Models\Period $period) : \BitmovinApiSdk\Models\Period
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/manifests/dash/{manifest_id}/periods', $pathParams,  null, $period, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Period::class);
    }

    /**
     * Delete Period
     *
     * @param string $manifestId
     * @param string $periodId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $manifestId, string $periodId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/manifests/dash/{manifest_id}/periods/{period_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Period Details
     *
     * @param string $manifestId
     * @param string $periodId
     * @return \BitmovinApiSdk\Models\Period
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $periodId) : \BitmovinApiSdk\Models\Period
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/dash/{manifest_id}/periods/{period_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Period::class);
    }

    /**
     * List all Periods
     *
     * @param string $manifestId
     * @param PeriodListQueryParams|null $queryParams
     * @return PeriodPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, PeriodListQueryParams $queryParams = null) : PeriodPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/dash/{manifest_id}/periods', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, PeriodPaginationResponse::class);
    }
}
