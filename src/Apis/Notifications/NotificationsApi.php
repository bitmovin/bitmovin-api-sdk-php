<?php

namespace BitmovinApiSdk\Apis\Notifications;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Notifications\Webhooks\WebhooksApi;
use BitmovinApiSdk\Apis\Notifications\States\StatesApi;
use BitmovinApiSdk\Apis\Notifications\Emails\EmailsApi;

class NotificationsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var WebhooksApi */
    public $webhooks;

    /** @var StatesApi */
    public $states;

    /** @var EmailsApi */
    public $emails;

    /**
     * NotificationsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->webhooks = new WebhooksApi(null, $this->httpWrapper);
        $this->states = new StatesApi(null, $this->httpWrapper);
        $this->emails = new EmailsApi(null, $this->httpWrapper);
    }

    /**
     * Delete Notification
     *
     * @param string $notificationId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $notificationId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'notification_id' => $notificationId,
        ];
        $response = $this->httpWrapper->request('DELETE','/notifications/{notification_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get Notification
     *
     * @param string $notificationId
     * @return \BitmovinApiSdk\Models\Notification
     * @throws BitmovinApiException
     */
    public function get(string $notificationId) : \BitmovinApiSdk\Models\Notification
    {
        $pathParams = [
            'notification_id' => $notificationId,
        ];
        $response = $this->httpWrapper->request('GET','/notifications/{notification_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Notification::class);
    }

    /**
     * List Notifications
     *
     * @param NotificationListQueryParams|null $queryParams
     * @return NotificationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(NotificationListQueryParams $queryParams = null) : NotificationPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/notifications', [], $queryParams, null, true);

        return ObjectMapper::map($response, NotificationPaginationResponse::class);
    }

    /**
     * List Notification State History (All Resources)
     *
     * @param string $notificationId
     * @param NotificationStateEntryListByNotificationIdQueryParams|null $queryParams
     * @return NotificationStateEntryPaginationResponse
     * @throws BitmovinApiException
     */
    public function listByNotificationId(string $notificationId, NotificationStateEntryListByNotificationIdQueryParams $queryParams = null) : NotificationStateEntryPaginationResponse
    {
        $pathParams = [
            'notification_id' => $notificationId,
        ];
        $response = $this->httpWrapper->request('GET','/notifications/{notification_id}/states', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, NotificationStateEntryPaginationResponse::class);
    }

    /**
     * Mute Notification
     *
     * @param string $notificationId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function mute(string $notificationId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'notification_id' => $notificationId,
        ];
        $response = $this->httpWrapper->request('POST','/notifications/{notification_id}/mute', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Unmute Notification
     *
     * @param string $notificationId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function unmute(string $notificationId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'notification_id' => $notificationId,
        ];
        $response = $this->httpWrapper->request('POST','/notifications/{notification_id}/unmute', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }
}
