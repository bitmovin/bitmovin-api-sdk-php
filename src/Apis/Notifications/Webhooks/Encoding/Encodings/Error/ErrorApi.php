<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\Error;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\Error\Customdata\CustomdataApi;

class ErrorApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * ErrorApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
    }

    /**
     * Add Encoding Error Webhook
     *
     * @param \BitmovinApiSdk\Models\Webhook $webhook
     * @return \BitmovinApiSdk\Models\Webhook
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Webhook $webhook) : \BitmovinApiSdk\Models\Webhook
    {
        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/encodings/error', [],  null, $webhook, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * Add Encoding Error Webhook for specific Encoding Resource. **Note:** A maximum number of 5 webhooks is allowed
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\Webhook $webhook
     * @return \BitmovinApiSdk\Models\Webhook
     * @throws BitmovinApiException
     */
    public function createByEncodingId(string $encodingId, \BitmovinApiSdk\Models\Webhook $webhook) : \BitmovinApiSdk\Models\Webhook
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/encodings/{encoding_id}/error', $pathParams,  null, $webhook, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * Delete Encoding Error Webhook for specific Encoding Resource
     *
     * @param string $encodingId
     * @param string $webhookId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function deleteByEncodingIdAndWebhookId(string $encodingId, string $webhookId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'webhook_id' => $webhookId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/notifications/webhooks/encoding/encodings/{encoding_id}/error/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Delete Encoding Error Webhook
     *
     * @param string $webhookId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function deleteByWebhookId(string $webhookId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'webhook_id' => $webhookId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/notifications/webhooks/encoding/encodings/error/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Encoding Error Webhook Details for specific Encoding Resource
     *
     * @param string $encodingId
     * @param string $webhookId
     * @return \BitmovinApiSdk\Models\Webhook
     * @throws BitmovinApiException
     */
    public function getByEncodingIdAndWebhookId(string $encodingId, string $webhookId) : \BitmovinApiSdk\Models\Webhook
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'webhook_id' => $webhookId,
        ];

        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/{encoding_id}/error/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * Encoding Error Webhook Details
     *
     * @param string $webhookId
     * @return \BitmovinApiSdk\Models\Webhook
     * @throws BitmovinApiException
     */
    public function getByWebhookId(string $webhookId) : \BitmovinApiSdk\Models\Webhook
    {
        $pathParams = [
            'webhook_id' => $webhookId,
        ];

        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/error/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * List Encoding Error Webhooks
     *
     * @param WebhookListQueryParams|null $queryParams
     * @return WebhookPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(WebhookListQueryParams $queryParams = null) : WebhookPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/error', [], $queryParams, null, true);

        return ObjectMapper::map($response, WebhookPaginationResponse::class);
    }

    /**
     * List Encoding Error Webhooks for specific Encoding Resource
     *
     * @param string $encodingId
     * @param WebhookListByEncodingIdQueryParams|null $queryParams
     * @return WebhookPaginationResponse
     * @throws BitmovinApiException
     */
    public function listByEncodingId(string $encodingId, WebhookListByEncodingIdQueryParams $queryParams = null) : WebhookPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/{encoding_id}/error', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, WebhookPaginationResponse::class);
    }
}
