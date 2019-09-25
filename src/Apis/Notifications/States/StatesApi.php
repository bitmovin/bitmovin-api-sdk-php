<?php

namespace BitmovinApiSdk\Apis\Notifications\States;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class StatesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * StatesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List Notification State History (Specific Resource)
     *
     * @param string $notificationId
     * @param string $resourceId
     * @param NotificationStateEntryListQueryParams|null $queryParams
     * @return NotificationStateEntryPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $notificationId, string $resourceId, NotificationStateEntryListQueryParams $queryParams = null) : NotificationStateEntryPaginationResponse
    {
        $pathParams = [
            'notification_id' => $notificationId,
            'resource_id' => $resourceId,
        ];
        $response = $this->httpWrapper->request('GET','/notifications/{notification_id}/states/{resource_id}', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, NotificationStateEntryPaginationResponse::class);
    }
}
