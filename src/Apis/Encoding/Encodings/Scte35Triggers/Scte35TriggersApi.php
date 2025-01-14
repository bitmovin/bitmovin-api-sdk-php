<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Scte35Triggers;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class Scte35TriggersApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * Scte35TriggersApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create SCTE 35 trigger
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\Scte35Trigger $scte35Trigger
     * @return \BitmovinApiSdk\Models\Scte35Trigger
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\Scte35Trigger $scte35Trigger) : \BitmovinApiSdk\Models\Scte35Trigger
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/scte-35-triggers', $pathParams,  null, $scte35Trigger, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Scte35Trigger::class);
    }

    /**
     * Delete SCTE 35 trigger
     *
     * @param string $encodingId
     * @param string $scte35triggerId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $scte35triggerId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'scte35trigger_id' => $scte35triggerId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/scte-35-triggers/{scte35trigger_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * SCTE 35 trigger Details
     *
     * @param string $encodingId
     * @param string $scte35triggerId
     * @return \BitmovinApiSdk\Models\Scte35Trigger
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $scte35triggerId) : \BitmovinApiSdk\Models\Scte35Trigger
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'scte35trigger_id' => $scte35triggerId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/scte-35-triggers/{scte35trigger_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Scte35Trigger::class);
    }

    /**
     * List all SCTE 35 triggers for an encoding
     *
     * @param string $encodingId
     * @param Scte35TriggerListQueryParams|null $queryParams
     * @return Scte35TriggerPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, Scte35TriggerListQueryParams $queryParams = null) : Scte35TriggerPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/scte-35-triggers', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, Scte35TriggerPaginationResponse::class);
    }
}
