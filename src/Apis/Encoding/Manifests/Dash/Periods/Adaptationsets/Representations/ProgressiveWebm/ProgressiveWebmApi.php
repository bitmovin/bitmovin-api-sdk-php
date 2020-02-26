<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\ProgressiveWebm;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class ProgressiveWebmApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ProgressiveWebmApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Progressive WebM Representation
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param \BitmovinApiSdk\Models\DashProgressiveWebmRepresentation $dashProgressiveWebmRepresentation
     * @return \BitmovinApiSdk\Models\DashProgressiveWebmRepresentation
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, string $periodId, string $adaptationsetId, \BitmovinApiSdk\Models\DashProgressiveWebmRepresentation $dashProgressiveWebmRepresentation) : \BitmovinApiSdk\Models\DashProgressiveWebmRepresentation
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/progressive-webm', $pathParams,  null, $dashProgressiveWebmRepresentation, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DashProgressiveWebmRepresentation::class);
    }

    /**
     * Delete Progressive WebM Representation
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
        $response = $this->httpWrapper->request('DELETE','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/progressive-webm/{representation_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Progressive WebM Representation Details
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param string $representationId
     * @return \BitmovinApiSdk\Models\DashProgressiveWebmRepresentation
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $periodId, string $adaptationsetId, string $representationId) : \BitmovinApiSdk\Models\DashProgressiveWebmRepresentation
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
            'representation_id' => $representationId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/progressive-webm/{representation_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DashProgressiveWebmRepresentation::class);
    }

    /**
     * List all Progressive WebM Representations
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param DashProgressiveWebmRepresentationListQueryParams|null $queryParams
     * @return DashProgressiveWebmRepresentationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $periodId, string $adaptationsetId, DashProgressiveWebmRepresentationListQueryParams $queryParams = null) : DashProgressiveWebmRepresentationPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/progressive-webm', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DashProgressiveWebmRepresentationPaginationResponse::class);
    }
}
