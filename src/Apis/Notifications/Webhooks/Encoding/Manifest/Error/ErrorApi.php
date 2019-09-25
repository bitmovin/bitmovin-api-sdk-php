<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Manifest\Error;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class ErrorApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ErrorApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Manifest Error Webhook (All Manifests)
     *
     * @param \BitmovinApiSdk\Models\Webhook $webhook
     * @return WebhookPaginationResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Webhook $webhook) : WebhookPaginationResponse
    {
        
        $response = $this->httpWrapper->request('POST','/notifications/webhooks/encoding/manifest/error', [],  null, $webhook, true);

        return ObjectMapper::map($response, WebhookPaginationResponse::class);
    }

    /**
     * Add Manifest Error Webhook Notification (Specific Manifest)
     *
     * @param string $manifestId
     * @param \BitmovinApiSdk\Models\Webhook $webhook
     * @return \BitmovinApiSdk\Models\Webhook
     * @throws BitmovinApiException
     */
    public function createByManifestId(string $manifestId, \BitmovinApiSdk\Models\Webhook $webhook) : \BitmovinApiSdk\Models\Webhook
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('POST','/notifications/webhooks/encoding/manifest/{manifest_id}/error', $pathParams,  null, $webhook, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * Replace Manifest Error Webhook Notification
     *
     * @param string $notificationId
     * @param \BitmovinApiSdk\Models\Webhook $webhook
     * @return \BitmovinApiSdk\Models\Webhook
     * @throws BitmovinApiException
     */
    public function update(string $notificationId, \BitmovinApiSdk\Models\Webhook $webhook) : \BitmovinApiSdk\Models\Webhook
    {
        $pathParams = [
            'notification_id' => $notificationId,
        ];
        $response = $this->httpWrapper->request('PUT','/notifications/webhooks/encoding/manifest/error/{notification_id}', $pathParams,  null, $webhook, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }
}
