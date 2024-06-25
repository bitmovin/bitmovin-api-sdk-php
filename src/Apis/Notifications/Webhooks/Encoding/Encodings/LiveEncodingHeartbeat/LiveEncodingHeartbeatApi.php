<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\LiveEncodingHeartbeat;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class LiveEncodingHeartbeatApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * LiveEncodingHeartbeatApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add &#39;Live Encoding Heartbeat&#39; Webhook
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingHeartbeatWebhook $liveEncodingHeartbeatWebhook
     * @return \BitmovinApiSdk\Models\LiveEncodingHeartbeatWebhook
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\LiveEncodingHeartbeatWebhook $liveEncodingHeartbeatWebhook) : \BitmovinApiSdk\Models\LiveEncodingHeartbeatWebhook
    {
        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/encodings/live-encoding-heartbeat', [],  null, $liveEncodingHeartbeatWebhook, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveEncodingHeartbeatWebhook::class);
    }

    /**
     * Delete &#39;Live Encoding Heartbeat&#39; Webhook
     *
     * @param string $webhookId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function deleteByWebhookId(string $webhookId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'webhook_id' => $webhookId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/notifications/webhooks/encoding/encodings/live-encoding-heartbeat/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * &#39;Live Encoding Heartbeat&#39; Webhook Details
     *
     * @param string $webhookId
     * @return \BitmovinApiSdk\Models\LiveEncodingHeartbeatWebhook
     * @throws BitmovinApiException
     */
    public function getByWebhookId(string $webhookId) : \BitmovinApiSdk\Models\LiveEncodingHeartbeatWebhook
    {
        $pathParams = [
            'webhook_id' => $webhookId,
        ];

        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/live-encoding-heartbeat/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveEncodingHeartbeatWebhook::class);
    }

    /**
     * List &#39;Live Encoding Heartbeat&#39; Webhooks
     *
     * @param LiveEncodingHeartbeatWebhookListQueryParams|null $queryParams
     * @return LiveEncodingHeartbeatWebhookPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(LiveEncodingHeartbeatWebhookListQueryParams $queryParams = null) : LiveEncodingHeartbeatWebhookPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/live-encoding-heartbeat', [], $queryParams, null, true);

        return ObjectMapper::map($response, LiveEncodingHeartbeatWebhookPaginationResponse::class);
    }
}
