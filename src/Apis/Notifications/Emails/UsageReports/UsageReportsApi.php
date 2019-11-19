<?php

namespace BitmovinApiSdk\Apis\Notifications\Emails\UsageReports;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class UsageReportsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * UsageReportsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List Email Notifications (All Usage Reports)
     *
     * @param EmailNotificationListQueryParams|null $queryParams
     * @return EmailNotificationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(EmailNotificationListQueryParams $queryParams = null) : EmailNotificationPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/notifications/emails/usage-reports', [], $queryParams, null, true);

        return ObjectMapper::map($response, EmailNotificationPaginationResponse::class);
    }
}
