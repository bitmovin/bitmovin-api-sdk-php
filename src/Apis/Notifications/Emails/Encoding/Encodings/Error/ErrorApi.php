<?php

namespace BitmovinApiSdk\Apis\Notifications\Emails\Encoding\Encodings\Error;

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
     * Add Encoding Error Email Notification (All Encodings)
     *
     * @param \BitmovinApiSdk\Models\EncodingErrorEmailNotification $encodingErrorEmailNotification
     * @return EncodingErrorEmailNotificationPaginationResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\EncodingErrorEmailNotification $encodingErrorEmailNotification) : EncodingErrorEmailNotificationPaginationResponse
    {
        
        $response = $this->httpWrapper->request('POST','/notifications/emails/encoding/encodings/error', [],  null, $encodingErrorEmailNotification, true);

        return ObjectMapper::map($response, EncodingErrorEmailNotificationPaginationResponse::class);
    }

    /**
     * Add Encoding Error Email Notification (Specific Encoding)
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\EmailNotification $emailNotification
     * @return \BitmovinApiSdk\Models\EmailNotification
     * @throws BitmovinApiException
     */
    public function createByEncodingId(string $encodingId, \BitmovinApiSdk\Models\EmailNotification $emailNotification) : \BitmovinApiSdk\Models\EmailNotification
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/notifications/emails/encoding/encodings/{encoding_id}/error', $pathParams,  null, $emailNotification, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EmailNotification::class);
    }

    /**
     * Replace Encoding Error Email Notification
     *
     * @param string $notificationId
     * @param \BitmovinApiSdk\Models\EmailNotification $emailNotification
     * @return \BitmovinApiSdk\Models\EmailNotification
     * @throws BitmovinApiException
     */
    public function update(string $notificationId, \BitmovinApiSdk\Models\EmailNotification $emailNotification) : \BitmovinApiSdk\Models\EmailNotification
    {
        $pathParams = [
            'notification_id' => $notificationId,
        ];
        $response = $this->httpWrapper->request('PUT','/notifications/emails/encoding/encodings/error/{notification_id}', $pathParams,  null, $emailNotification, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EmailNotification::class);
    }
}
