<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\EncodingApi;

class WebhooksApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var EncodingApi */
    public $encoding;

    /**
     * WebhooksApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->encoding = new EncodingApi(null, $this->httpWrapper);
    }
}
