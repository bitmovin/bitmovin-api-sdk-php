<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsAlertingWebhook extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $url;

    /** @var WebhookHttpMethod */
    public $method;

    /** @var bool */
    public $insecureSsl;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->method = ObjectMapper::map($this->method, WebhookHttpMethod::class);
    }

    /**
     * Webhook url (required)
     *
     * @param string $url
     * @return $this
     */
    public function url(string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * HTTP method used for the webhook (required)
     *
     * @param WebhookHttpMethod $method
     * @return $this
     */
    public function method(WebhookHttpMethod $method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Whether to skip SSL certification verification or not (required)
     *
     * @param bool $insecureSsl
     * @return $this
     */
    public function insecureSsl(bool $insecureSsl)
    {
        $this->insecureSsl = $insecureSsl;

        return $this;
    }
}

