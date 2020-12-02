<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\EncodingStatusChanged;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class EncodingStatusChangedApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * EncodingStatusChangedApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Encoding Changed Webhook Notification (All Encodings)
     *
     * @param \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditionsRequest $webhookNotificationWithStreamConditionsRequest
     * @return \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\WebhookNotificationWithStreamConditionsRequest $webhookNotificationWithStreamConditionsRequest) : \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions
    {
        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/encodings/encoding-status-changed', [],  null, $webhookNotificationWithStreamConditionsRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions::class);
    }

    /**
     * Add Encoding Changed Webhook Notification (Specific Encoding)
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditionsRequest $webhookNotificationWithStreamConditionsRequest
     * @return \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions
     * @throws BitmovinApiException
     */
    public function createByEncodingId(string $encodingId, \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditionsRequest $webhookNotificationWithStreamConditionsRequest) : \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/encodings/{encoding_id}/encoding-status-changed', $pathParams,  null, $webhookNotificationWithStreamConditionsRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions::class);
    }

    /**
     * Delete Encoding Status Changed Webhook
     *
     * @param string $notificationId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function deleteByWebhookId(string $notificationId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'notification_id' => $notificationId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/notifications/webhooks/encoding/encodings/encoding-status-changed/{notification_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Replace Encoding Status Changed Webhook Notification
     *
     * @param string $notificationId
     * @param \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditionsRequest $webhookNotificationWithStreamConditionsRequest
     * @return \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions
     * @throws BitmovinApiException
     */
    public function update(string $notificationId, \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditionsRequest $webhookNotificationWithStreamConditionsRequest) : \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions
    {
        $pathParams = [
            'notification_id' => $notificationId,
        ];

        $response = $this->httpWrapper->request('PUT', '/notifications/webhooks/encoding/encodings/encoding-status-changed/{notification_id}', $pathParams,  null, $webhookNotificationWithStreamConditionsRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions::class);
    }
}
