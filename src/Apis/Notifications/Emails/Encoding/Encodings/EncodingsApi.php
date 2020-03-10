<?php

namespace BitmovinApiSdk\Apis\Notifications\Emails\Encoding\Encodings;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Notifications\Emails\Encoding\Encodings\LiveInputStreamChanged\LiveInputStreamChangedApi;
use BitmovinApiSdk\Apis\Notifications\Emails\Encoding\Encodings\Error\ErrorApi;

class EncodingsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var LiveInputStreamChangedApi */
    public $liveInputStreamChanged;

    /** @var ErrorApi */
    public $error;

    /**
     * EncodingsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->liveInputStreamChanged = new LiveInputStreamChangedApi(null, $this->httpWrapper);
        $this->error = new ErrorApi(null, $this->httpWrapper);
    }

    /**
     * List Email Notifications (Specific Encoding)
     *
     * @param string $encodingId
     * @param EmailNotificationWithStreamConditionsListQueryParams|null $queryParams
     * @return EmailNotificationWithStreamConditionsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, EmailNotificationWithStreamConditionsListQueryParams $queryParams = null) : EmailNotificationWithStreamConditionsPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/notifications/emails/encoding/encodings/{encoding_id}', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, EmailNotificationWithStreamConditionsPaginationResponse::class);
    }
}
