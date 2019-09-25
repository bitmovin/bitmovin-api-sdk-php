<?php

namespace BitmovinApiSdk\Apis\Notifications\Emails;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Notifications\Emails\Encoding\EncodingApi;

class EmailsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var EncodingApi */
    public $encoding;

    /**
     * EmailsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->encoding = new EncodingApi(null, $this->httpWrapper);
    }

    /**
     * List Email Notifications
     *
     * @param NotificationListQueryParams|null $queryParams
     * @return NotificationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(NotificationListQueryParams $queryParams = null) : NotificationPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/notifications/emails', [], $queryParams, null, true);

        return ObjectMapper::map($response, NotificationPaginationResponse::class);
    }
}
