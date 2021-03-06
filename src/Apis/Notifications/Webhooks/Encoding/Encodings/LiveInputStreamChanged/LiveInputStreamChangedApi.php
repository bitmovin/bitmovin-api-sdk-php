<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\LiveInputStreamChanged;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class LiveInputStreamChangedApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * LiveInputStreamChangedApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Live Input Stream Changed Webhook Notification (All Encodings)
     *
     * @param \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditionsRequest $webhookNotificationWithStreamConditionsRequest
     * @return \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\WebhookNotificationWithStreamConditionsRequest $webhookNotificationWithStreamConditionsRequest) : \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions
    {
        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/encodings/live-input-stream-changed', [],  null, $webhookNotificationWithStreamConditionsRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions::class);
    }

    /**
     * Add Live Input Stream Changed Webhook Notification (Specific Encoding)
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

        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/encodings/{encoding_id}/live-input-stream-changed', $pathParams,  null, $webhookNotificationWithStreamConditionsRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions::class);
    }

    /**
     * Replace Live Input Stream Changed Webhook Notification
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

        $response = $this->httpWrapper->request('PUT', '/notifications/webhooks/encoding/encodings/live-input-stream-changed/{notification_id}', $pathParams,  null, $webhookNotificationWithStreamConditionsRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WebhookNotificationWithStreamConditions::class);
    }
}
