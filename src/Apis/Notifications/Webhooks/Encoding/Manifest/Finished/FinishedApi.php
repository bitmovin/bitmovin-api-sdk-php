<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Manifest\Finished;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class FinishedApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * FinishedApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Manifest Finished Successfully Webhook (All Manifests)
     *
     * @param \BitmovinApiSdk\Models\Webhook $webhook
     * @return \BitmovinApiSdk\Models\Webhook
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Webhook $webhook) : \BitmovinApiSdk\Models\Webhook
    {
        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/manifest/finished', [],  null, $webhook, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * Add Manifest Finished Successfully Webhook Notification (Specific Manifest)
     *
     * @param string $manifestId
     * @param \BitmovinApiSdk\Models\Webhook $webhook
     * @return \BitmovinApiSdk\Models\Webhook
     * @throws BitmovinApiException
     */
    public function createByManifestId(string $manifestId, \BitmovinApiSdk\Models\Webhook $webhook) : \BitmovinApiSdk\Models\Webhook
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('POST', '/notifications/webhooks/encoding/manifest/{manifest_id}/finished', $pathParams,  null, $webhook, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }

    /**
     * Delete Manifest Finished Webhook
     *
     * @param string $notificationId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $notificationId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'notification_id' => $notificationId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/notifications/webhooks/encoding/manifest/finished/{notification_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Replace Manifest Finished Webhook Notification
     *
     * @param string $notificationId
     * @param \BitmovinApiSdk\Models\Webhook $webhook
     * @return \BitmovinApiSdk\Models\Webhook
     * @throws BitmovinApiException
     */
    public function update(string $notificationId, \BitmovinApiSdk\Models\Webhook $webhook) : \BitmovinApiSdk\Models\Webhook
    {
        $pathParams = [
            'notification_id' => $notificationId,
        ];

        $response = $this->httpWrapper->request('PUT', '/notifications/webhooks/encoding/manifest/finished/{notification_id}', $pathParams,  null, $webhook, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Webhook::class);
    }
}
