<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WebhookNotification extends Notification
{
    /** @var string */
    public $url;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
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
}

