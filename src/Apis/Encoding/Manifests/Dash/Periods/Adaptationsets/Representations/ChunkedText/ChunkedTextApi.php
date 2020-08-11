<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\ChunkedText;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ChunkedTextApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ChunkedTextApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Chunked Text Representation
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param \BitmovinApiSdk\Models\DashChunkedTextRepresentation $dashChunkedTextRepresentation
     * @return \BitmovinApiSdk\Models\DashChunkedTextRepresentation
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, string $periodId, string $adaptationsetId, \BitmovinApiSdk\Models\DashChunkedTextRepresentation $dashChunkedTextRepresentation) : \BitmovinApiSdk\Models\DashChunkedTextRepresentation
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/chunked-text', $pathParams,  null, $dashChunkedTextRepresentation, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DashChunkedTextRepresentation::class);
    }

    /**
     * Delete Chunked Text Representation
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/chunked-text/{representation_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Chunked Text Representation Details
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param string $representationId
     * @return \BitmovinApiSdk\Models\DashChunkedTextRepresentation
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $periodId, string $adaptationsetId, string $representationId) : \BitmovinApiSdk\Models\DashChunkedTextRepresentation
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
            'representation_id' => $representationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/chunked-text/{representation_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DashChunkedTextRepresentation::class);
    }

    /**
     * List all Chunked Text Representations
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @param DashChunkedTextRepresentationListQueryParams|null $queryParams
     * @return DashChunkedTextRepresentationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $periodId, string $adaptationsetId, DashChunkedTextRepresentationListQueryParams $queryParams = null) : DashChunkedTextRepresentationPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/representations/chunked-text', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DashChunkedTextRepresentationPaginationResponse::class);
    }
}
