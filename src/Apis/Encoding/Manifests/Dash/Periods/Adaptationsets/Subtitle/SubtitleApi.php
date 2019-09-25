<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Subtitle;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class SubtitleApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * SubtitleApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Subtitle AdaptationSet
     *
     * @param string $manifestId
     * @param string $periodId
     * @param \BitmovinApiSdk\Models\SubtitleAdaptationSet $subtitleAdaptationSet
     * @return \BitmovinApiSdk\Models\SubtitleAdaptationSet
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, string $periodId, \BitmovinApiSdk\Models\SubtitleAdaptationSet $subtitleAdaptationSet) : \BitmovinApiSdk\Models\SubtitleAdaptationSet
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/subtitle', $pathParams,  null, $subtitleAdaptationSet, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SubtitleAdaptationSet::class);
    }

    /**
     * Delete Subtitle AdaptationSet
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $manifestId, string $periodId, string $adaptationsetId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/subtitle/{adaptationset_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Subtitle AdaptationSet Details
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @return \BitmovinApiSdk\Models\SubtitleAdaptationSet
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $periodId, string $adaptationsetId) : \BitmovinApiSdk\Models\SubtitleAdaptationSet
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/subtitle/{adaptationset_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SubtitleAdaptationSet::class);
    }

    /**
     * List all Subtitle AdaptationSets
     *
     * @param string $manifestId
     * @param string $periodId
     * @param SubtitleAdaptationSetListQueryParams|null $queryParams
     * @return SubtitleAdaptationSetPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $periodId, SubtitleAdaptationSetListQueryParams $queryParams = null) : SubtitleAdaptationSetPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/subtitle', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, SubtitleAdaptationSetPaginationResponse::class);
    }
}
