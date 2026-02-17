<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\Encodings\DnsMappings;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class DnsMappingsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DnsMappingsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create new DNS mapping for encoding
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\DnsMappingRequest $dnsMappingRequest
     * @return \BitmovinApiSdk\Models\DnsMappingResponse
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\DnsMappingRequest $dnsMappingRequest) : \BitmovinApiSdk\Models\DnsMappingResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/live/encodings/{encoding_id}/dns-mappings', $pathParams,  null, $dnsMappingRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DnsMappingResponse::class);
    }

    /**
     * Delete DNS mapping
     *
     * @param string $encodingId
     * @param string $id
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $id) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'id' => $id,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/live/encodings/{encoding_id}/dns-mappings/{id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Delete all DNS mappings for encoding
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\BitmovinResponseList
     * @throws BitmovinApiException
     */
    public function deleteAll(string $encodingId) : \BitmovinApiSdk\Models\BitmovinResponseList
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/live/encodings/{encoding_id}/dns-mappings', $pathParams,  null, null, true);

        return new \BitmovinApiSdk\Models\BitmovinResponseList($response);
    }

    /**
     * DNS mapping details
     *
     * @param string $encodingId
     * @param string $id
     * @return \BitmovinApiSdk\Models\DnsMappingResponse
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $id) : \BitmovinApiSdk\Models\DnsMappingResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'id' => $id,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/live/encodings/{encoding_id}/dns-mappings/{id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DnsMappingResponse::class);
    }

    /**
     * List DNS mappings for encoding
     *
     * @param string $encodingId
     * @param DnsMappingResponseListQueryParams|null $queryParams
     * @return DnsMappingResponsePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, DnsMappingResponseListQueryParams $queryParams = null) : DnsMappingResponsePaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/live/encodings/{encoding_id}/dns-mappings', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DnsMappingResponsePaginationResponse::class);
    }
}
