<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Fmp4\Drm;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Fmp4\Drm\Contentprotection\ContentprotectionApi;

class DrmApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ContentprotectionApi */
    public $contentprotection;

    /**
     * DrmApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->contentprotection = new ContentprotectionApi(null, $this->httpWrapper);
    }

    /**
     * Add DRM fMP4 Representation
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param \BitmovinApiSdk\Models\DashFmp4DrmRepresentation $dashFmp4DrmRepresentation
     * @return \BitmovinApiSdk\Models\DashFmp4DrmRepresentation
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, string $periodId, string $adaptationsetId, \BitmovinApiSdk\Models\DashFmp4DrmRepresentation $dashFmp4DrmRepresentation) : \BitmovinApiSdk\Models\DashFmp4DrmRepresentation
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/fmp4/drm', $pathParams,  null, $dashFmp4DrmRepresentation, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DashFmp4DrmRepresentation::class);
    }

    /**
     * Delete DRM fMP4 Representation
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param string $representationId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $manifestId, string $periodId, string $adaptationsetId, string $representationId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
            'representation_id' => $representationId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/fmp4/drm/{representation_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * DRM fMP4 Representation Details
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param string $representationId
     * @return \BitmovinApiSdk\Models\DashFmp4DrmRepresentation
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $periodId, string $adaptationsetId, string $representationId) : \BitmovinApiSdk\Models\DashFmp4DrmRepresentation
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
            'representation_id' => $representationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/fmp4/drm/{representation_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DashFmp4DrmRepresentation::class);
    }

    /**
     * List all DRM fMP4 Representations
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param DashFmp4DrmRepresentationListQueryParams|null $queryParams
     * @return DashFmp4DrmRepresentationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $periodId, string $adaptationsetId, DashFmp4DrmRepresentationListQueryParams $queryParams = null) : DashFmp4DrmRepresentationPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/fmp4/drm', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DashFmp4DrmRepresentationPaginationResponse::class);
    }
}
