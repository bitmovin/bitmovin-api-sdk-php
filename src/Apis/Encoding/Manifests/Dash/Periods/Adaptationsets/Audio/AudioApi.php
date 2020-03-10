<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Audio;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class AudioApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * AudioApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Audio AdaptationSet
     *
     * @param string $manifestId
     * @param string $periodId
     * @param \BitmovinApiSdk\Models\AudioAdaptationSet $audioAdaptationSet
     * @return \BitmovinApiSdk\Models\AudioAdaptationSet
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, string $periodId, \BitmovinApiSdk\Models\AudioAdaptationSet $audioAdaptationSet) : \BitmovinApiSdk\Models\AudioAdaptationSet
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/audio', $pathParams,  null, $audioAdaptationSet, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AudioAdaptationSet::class);
    }

    /**
     * Delete Audio AdaptationSet
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/audio/{adaptationset_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Audio AdaptationSet Details
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @return \BitmovinApiSdk\Models\AudioAdaptationSet
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $periodId, string $adaptationsetId) : \BitmovinApiSdk\Models\AudioAdaptationSet
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/audio/{adaptationset_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AudioAdaptationSet::class);
    }

    /**
     * List all Audio AdaptationSets
     *
     * @param string $manifestId
     * @param string $periodId
     * @param AudioAdaptationSetListQueryParams|null $queryParams
     * @return AudioAdaptationSetPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $periodId, AudioAdaptationSetListQueryParams $queryParams = null) : AudioAdaptationSetPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/audio', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, AudioAdaptationSetPaginationResponse::class);
    }
}
