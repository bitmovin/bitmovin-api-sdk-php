<?php

namespace BitmovinApiSdk\Apis\Agents\Aisa\Sessions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class SessionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * SessionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create Agent Session
     *
     * @return \BitmovinApiSdk\Models\AgentSessionResponse
     * @throws BitmovinApiException
     */
    public function create() : \BitmovinApiSdk\Models\AgentSessionResponse
    {
        $response = $this->httpWrapper->request('POST', '/agents/aisa/sessions', [],  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AgentSessionResponse::class);
    }

    /**
     * Delete Agent Session
     *
     * @param string $sessionId
     * @return \BitmovinApiSdk\Models\AgentSessionResponse
     * @throws BitmovinApiException
     */
    public function delete(string $sessionId) : \BitmovinApiSdk\Models\AgentSessionResponse
    {
        $pathParams = [
            'session_id' => $sessionId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/agents/aisa/sessions/{session_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AgentSessionResponse::class);
    }

    /**
     * Get Agent Session Details
     *
     * @param string $sessionId
     * @return \BitmovinApiSdk\Models\AgentSessionHistoryResponse
     * @throws BitmovinApiException
     */
    public function get(string $sessionId) : \BitmovinApiSdk\Models\AgentSessionHistoryResponse
    {
        $pathParams = [
            'session_id' => $sessionId,
        ];

        $response = $this->httpWrapper->request('GET', '/agents/aisa/sessions/{session_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AgentSessionHistoryResponse::class);
    }

    /**
     * List Agent Sessions
     *
     * @return \BitmovinApiSdk\Models\AgentSessionListResponse
     * @throws BitmovinApiException
     */
    public function list() : \BitmovinApiSdk\Models\AgentSessionListResponse
    {
        $response = $this->httpWrapper->request('GET', '/agents/aisa/sessions', [],  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AgentSessionListResponse::class);
    }
}
