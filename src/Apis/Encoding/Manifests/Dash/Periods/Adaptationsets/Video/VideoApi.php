<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Video;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class VideoApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * VideoApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Video AdaptationSet
     *
     * @param string $manifestId
     * @param string $periodId
     * @param \BitmovinApiSdk\Models\VideoAdaptationSet $videoAdaptationSet
     * @return \BitmovinApiSdk\Models\VideoAdaptationSet
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, string $periodId, \BitmovinApiSdk\Models\VideoAdaptationSet $videoAdaptationSet) : \BitmovinApiSdk\Models\VideoAdaptationSet
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/video', $pathParams,  null, $videoAdaptationSet, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\VideoAdaptationSet::class);
    }

    /**
     * Delete Video AdaptationSet
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
        $response = $this->httpWrapper->request('DELETE','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/video/{adaptationset_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Video AdaptationSet Details
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @return \BitmovinApiSdk\Models\VideoAdaptationSet
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $periodId, string $adaptationsetId) : \BitmovinApiSdk\Models\VideoAdaptationSet
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/video/{adaptationset_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\VideoAdaptationSet::class);
    }

    /**
     * List all Video AdaptationSets
     *
     * @param string $manifestId
     * @param string $periodId
     * @param VideoAdaptationSetListQueryParams|null $queryParams
     * @return VideoAdaptationSetPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $periodId, VideoAdaptationSetListQueryParams $queryParams = null) : VideoAdaptationSetPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/video', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, VideoAdaptationSetPaginationResponse::class);
    }
}
