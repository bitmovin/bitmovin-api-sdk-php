<?php

namespace BitmovinApiSdk\Apis\Notifications\Emails\Encoding\Encodings\LiveInputStreamChanged;

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
     * Add Live Input Stream Changed Email Notification (All Encodings)
     *
     * @param \BitmovinApiSdk\Models\EmailNotificationWithStreamConditionsRequest $emailNotificationWithStreamConditionsRequest
     * @return \BitmovinApiSdk\Models\EmailNotificationWithStreamConditions
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\EmailNotificationWithStreamConditionsRequest $emailNotificationWithStreamConditionsRequest) : \BitmovinApiSdk\Models\EmailNotificationWithStreamConditions
    {
        $response = $this->httpWrapper->request('POST', '/notifications/emails/encoding/encodings/live-input-stream-changed', [],  null, $emailNotificationWithStreamConditionsRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EmailNotificationWithStreamConditions::class);
    }

    /**
     * Add Live Input Stream Changed Email Notification (Specific Encoding)
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\EmailNotificationWithStreamConditionsRequest $emailNotificationWithStreamConditionsRequest
     * @return \BitmovinApiSdk\Models\EmailNotificationWithStreamConditions
     * @throws BitmovinApiException
     */
    public function createByEncodingId(string $encodingId, \BitmovinApiSdk\Models\EmailNotificationWithStreamConditionsRequest $emailNotificationWithStreamConditionsRequest) : \BitmovinApiSdk\Models\EmailNotificationWithStreamConditions
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/notifications/emails/encoding/encodings/{encoding_id}/live-input-stream-changed', $pathParams,  null, $emailNotificationWithStreamConditionsRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EmailNotificationWithStreamConditions::class);
    }

    /**
     * Replace Live Input Stream Changed Email Notification
     *
     * @param string $notificationId
     * @param \BitmovinApiSdk\Models\EmailNotificationWithStreamConditionsRequest $emailNotificationWithStreamConditionsRequest
     * @return \BitmovinApiSdk\Models\EmailNotificationWithStreamConditions
     * @throws BitmovinApiException
     */
    public function update(string $notificationId, \BitmovinApiSdk\Models\EmailNotificationWithStreamConditionsRequest $emailNotificationWithStreamConditionsRequest) : \BitmovinApiSdk\Models\EmailNotificationWithStreamConditions
    {
        $pathParams = [
            'notification_id' => $notificationId,
        ];

        $response = $this->httpWrapper->request('PUT', '/notifications/emails/encoding/encodings/live-input-stream-changed/{notification_id}', $pathParams,  null, $emailNotificationWithStreamConditionsRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EmailNotificationWithStreamConditions::class);
    }
}
