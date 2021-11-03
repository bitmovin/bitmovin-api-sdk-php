<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\TransferError\Customdata;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class CustomdataApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * CustomdataApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * &#39;Encoding Transfer Error&#39; Webhook Custom Data for a specific Encoding
     *
     * @param string $encodingId
     * @param string $webhookId
     * @return \BitmovinApiSdk\Models\CustomData
     * @throws BitmovinApiException
     */
    public function getCustomDataByEncodingIdAndWebhookId(string $encodingId, string $webhookId) : \BitmovinApiSdk\Models\CustomData
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'webhook_id' => $webhookId,
        ];

        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/{encoding_id}/transfer-error/{webhook_id}/customData', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomData::class);
    }

    /**
     * &#39;Encoding Transfer Error&#39; Webhook Custom Data
     *
     * @param string $webhookId
     * @return \BitmovinApiSdk\Models\CustomData
     * @throws BitmovinApiException
     */
    public function getCustomDataByWebhookId(string $webhookId) : \BitmovinApiSdk\Models\CustomData
    {
        $pathParams = [
            'webhook_id' => $webhookId,
        ];

        $response = $this->httpWrapper->request('GET', '/notifications/webhooks/encoding/encodings/transfer-error/{webhook_id}/customData', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomData::class);
    }
}
