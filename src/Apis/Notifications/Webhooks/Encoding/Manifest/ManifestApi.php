<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Manifest;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Manifest\Error\ErrorApi;
use BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Manifest\Finished\FinishedApi;

class ManifestApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ErrorApi */
    public $error;

    /** @var FinishedApi */
    public $finished;

    /**
     * ManifestApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->error = new ErrorApi(null, $this->httpWrapper);
        $this->finished = new FinishedApi(null, $this->httpWrapper);
    }

    /**
     * List Webhook Notifications (Specific Manifest)
     *
     * @param string $manifestId
     * @param NotificationListQueryParams|null $queryParams
     * @return NotificationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, NotificationListQueryParams $queryParams = null) : NotificationPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('GET','/notifications/webhooks/encoding/manifest/{manifest_id}', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, NotificationPaginationResponse::class);
    }
}
