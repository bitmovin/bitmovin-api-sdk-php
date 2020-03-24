<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\TransferError;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\TransferError\Customdata\CustomdataApi;

class TransferErrorApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * TransferErrorApi constructor.
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
     * Add Encoding Transfer Error Webhook
     *
     * @param \BitmovinApiSdk\Models\Webhook $webhook
     * @return \BitmovinApiSdk\Models\Webhook
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Webhook $webhook) : \BitmovinApiSdk\Models\Webhook
    {
        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/encodings/transfer-error', [],  null, $webhook, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * Add Encoding Transfer Error Webhook for specific Encoding Resource
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

        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/encodings/{encoding_id}/transfer-error', $pathParams,  null, $webhook, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * Delete Encoding Transfer Error Webhook for specific Encoding Resource
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

        $response = $this->httpWrapper->request('DELETE', '/notifications/webhooks/encoding/encodings/{encoding_id}/transfer-error/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Delete Encoding Transfer Error Webhook
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

        $response = $this->httpWrapper->request('DELETE', '/notifications/webhooks/encoding/encodings/transfer-error/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Encoding Transfer Error Webhook Details for specific Encoding Resource
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

        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/{encoding_id}/transfer-error/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * Encoding Transfer Error Webhook Details
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

        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/transfer-error/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * List Encoding Transfer-Error Webhooks
     *
     * @param WebhookListQueryParams|null $queryParams
     * @return WebhookPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(WebhookListQueryParams $queryParams = null) : WebhookPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/transfer-error', [], $queryParams, null, true);

        return ObjectMapper::map($response, WebhookPaginationResponse::class);
    }

    /**
     * List Encoding Transfer Error Webhooks for specific Encoding Resource
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

        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/{encoding_id}/transfer-error', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, WebhookPaginationResponse::class);
    }
}
