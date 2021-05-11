<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Image;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ImageApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ImageApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Image AdaptationSet
     *
     * @param string $manifestId
     * @param string $periodId
     * @param \BitmovinApiSdk\Models\ImageAdaptationSet $imageAdaptationSet
     * @return \BitmovinApiSdk\Models\ImageAdaptationSet
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, string $periodId, \BitmovinApiSdk\Models\ImageAdaptationSet $imageAdaptationSet) : \BitmovinApiSdk\Models\ImageAdaptationSet
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/image', $pathParams,  null, $imageAdaptationSet, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ImageAdaptationSet::class);
    }

    /**
     * Delete Image AdaptationSet
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/image/{adaptationset_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Image AdaptationSet Details
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @return \BitmovinApiSdk\Models\ImageAdaptationSet
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $periodId, string $adaptationsetId) : \BitmovinApiSdk\Models\ImageAdaptationSet
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/image/{adaptationset_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ImageAdaptationSet::class);
    }

    /**
     * List all Image AdaptationSets
     *
     * @param string $manifestId
     * @param string $periodId
     * @param ImageAdaptationSetListQueryParams|null $queryParams
     * @return ImageAdaptationSetPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $periodId, ImageAdaptationSetListQueryParams $queryParams = null) : ImageAdaptationSetPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/image', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ImageAdaptationSetPaginationResponse::class);
    }
}
