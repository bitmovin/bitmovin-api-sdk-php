<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WebhookNotification extends Notification
{
    /** @var string */
    public $url;

    /** @var WebhookHttpMethod */
    public $method;

    /** @var bool */
    public $insecureSsl;

    /** @var WebhookSignature */
    public $signature;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->method = ObjectMapper::map($this->method, WebhookHttpMethod::class);
        $this->signature = ObjectMapper::map($this->signature, WebhookSignature::class);
    }

    /**
     * The destination URL where the webhook data is send to (required)
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
     * HTTP method used for the webhook
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
     * Skip verification of the SSL certificate
     *
     * @param bool $insecureSsl
     * @return $this
     */
    public function insecureSsl(bool $insecureSsl)
    {
        $this->insecureSsl = $insecureSsl;

        return $this;
    }

    /**
     * Signature used for the webhook
     *
     * @param WebhookSignature $signature
     * @return $this
     */
    public function signature(WebhookSignature $signature)
    {
        $this->signature = $signature;

        return $this;
    }
}

