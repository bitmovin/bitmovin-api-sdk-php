<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Cmaf;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Cmaf\Contentprotection\ContentprotectionApi;

class CmafApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ContentprotectionApi */
    public $contentprotection;

    /**
     * CmafApi constructor.
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
     * Add CMAF Representation
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param \BitmovinApiSdk\Models\DashCmafRepresentation $dashCmafRepresentation
     * @return \BitmovinApiSdk\Models\DashCmafRepresentation
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, string $periodId, string $adaptationsetId, \BitmovinApiSdk\Models\DashCmafRepresentation $dashCmafRepresentation) : \BitmovinApiSdk\Models\DashCmafRepresentation
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/cmaf', $pathParams,  null, $dashCmafRepresentation, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DashCmafRepresentation::class);
    }

    /**
     * Delete CMAF Representation
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
        $response = $this->httpWrapper->request('DELETE','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/cmaf/{representation_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * CMAF Representation Details
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param string $representationId
     * @return \BitmovinApiSdk\Models\DashCmafRepresentation
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $periodId, string $adaptationsetId, string $representationId) : \BitmovinApiSdk\Models\DashCmafRepresentation
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
            'representation_id' => $representationId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/cmaf/{representation_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DashCmafRepresentation::class);
    }

    /**
     * List all CMAF Representations
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param DashCmafRepresentationListQueryParams|null $queryParams
     * @return DashCmafRepresentationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $periodId, string $adaptationsetId, DashCmafRepresentationListQueryParams $queryParams = null) : DashCmafRepresentationPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/cmaf', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DashCmafRepresentationPaginationResponse::class);
    }
}
