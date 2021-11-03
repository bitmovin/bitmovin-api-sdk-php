<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\Finished;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\Finished\Customdata\CustomdataApi;

class FinishedApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * FinishedApi constructor.
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
     * Add &#39;Encoding Finished&#39; Webhook
     *
     * @param \BitmovinApiSdk\Models\Webhook $webhook
     * @return \BitmovinApiSdk\Models\Webhook
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Webhook $webhook) : \BitmovinApiSdk\Models\Webhook
    {
        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/encodings/finished', [],  null, $webhook, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * Add &#39;Encoding Finished&#39; Webhook for a specific Encoding
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

        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/encodings/{encoding_id}/finished', $pathParams,  null, $webhook, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * Delete &#39;Encoding Finished&#39; Webhook for a specific Encoding
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

        $response = $this->httpWrapper->request('DELETE', '/notifications/webhooks/encoding/encodings/{encoding_id}/finished/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Delete &#39;Encoding Finished&#39; Webhook
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

        $response = $this->httpWrapper->request('DELETE', '/notifications/webhooks/encoding/encodings/finished/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * &#39;Encoding Finished&#39; Webhook Details for a specific Encoding
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

        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/{encoding_id}/finished/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * &#39;Encoding Finished&#39; Webhook Details
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

        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/finished/{webhook_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * List &#39;Encoding Finished&#39; Webhooks
     *
     * @param WebhookListQueryParams|null $queryParams
     * @return WebhookPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(WebhookListQueryParams $queryParams = null) : WebhookPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/finished', [], $queryParams, null, true);

        return ObjectMapper::map($response, WebhookPaginationResponse::class);
    }

    /**
     * List &#39;Encoding Finished&#39; Webhooks for a specific Encoding
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

        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/{encoding_id}/finished', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, WebhookPaginationResponse::class);
    }
}
