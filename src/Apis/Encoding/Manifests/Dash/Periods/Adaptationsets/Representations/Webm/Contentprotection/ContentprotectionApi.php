<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Webm\Contentprotection;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ContentprotectionApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ContentprotectionApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Content Protection to WebM Representation
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param string $representationId
     * @param \BitmovinApiSdk\Models\ContentProtection $contentProtection
     * @return \BitmovinApiSdk\Models\ContentProtection
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, string $periodId, string $adaptationsetId, string $representationId, \BitmovinApiSdk\Models\ContentProtection $contentProtection) : \BitmovinApiSdk\Models\ContentProtection
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
            'representation_id' => $representationId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/webm/{representation_id}/contentprotection', $pathParams,  null, $contentProtection, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ContentProtection::class);
    }

    /**
     * Delete WebM Representation Content Protection
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param string $representationId
     * @param string $contentprotectionId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $manifestId, string $periodId, string $adaptationsetId, string $representationId, string $contentprotectionId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
            'representation_id' => $representationId,
            'contentprotection_id' => $contentprotectionId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/webm/{representation_id}/contentprotection/{contentprotection_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * WebM Representation Content Protection Details
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param string $representationId
     * @param string $contentprotectionId
     * @return \BitmovinApiSdk\Models\ContentProtection
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $periodId, string $adaptationsetId, string $representationId, string $contentprotectionId) : \BitmovinApiSdk\Models\ContentProtection
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
            'representation_id' => $representationId,
            'contentprotection_id' => $contentprotectionId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/webm/{representation_id}/contentprotection/{contentprotection_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ContentProtection::class);
    }

    /**
     * List all WebM Representation Content Protections
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param string $representationId
     * @param ContentProtectionListQueryParams|null $queryParams
     * @return ContentProtectionPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $periodId, string $adaptationsetId, string $representationId, ContentProtectionListQueryParams $queryParams = null) : ContentProtectionPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
            'representation_id' => $representationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/webm/{representation_id}/contentprotection', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ContentProtectionPaginationResponse::class);
    }
}
