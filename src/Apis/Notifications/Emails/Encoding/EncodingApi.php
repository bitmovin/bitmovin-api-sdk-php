<?php

namespace BitmovinApiSdk\Apis\Notifications\Emails\Encoding;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Notifications\Emails\Encoding\Encodings\EncodingsApi;

class EncodingApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var EncodingsApi */
    public $encodings;

    /**
     * EncodingApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->encodings = new EncodingsApi(null, $this->httpWrapper);
    }

    /**
     * List Email Notifications (All Encodings)
     *
     * @param EmailNotificationListQueryParams|null $queryParams
     * @return EmailNotificationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(EmailNotificationListQueryParams $queryParams = null) : EmailNotificationPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/notifications/emails/encoding', [], $queryParams, null, true);

        return ObjectMapper::map($response, EmailNotificationPaginationResponse::class);
    }
}
