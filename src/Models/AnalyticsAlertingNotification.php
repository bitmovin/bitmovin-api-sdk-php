<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsAlertingNotification extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string[] */
    public $emails;

    /** @var \BitmovinApiSdk\Models\AnalyticsAlertingWebhook[] */
    public $webhooks;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->webhooks = ObjectMapper::map($this->webhooks, AnalyticsAlertingWebhook::class);
    }

    /**
     * List of email addresses
     *
     * @param string[] $emails
     * @return $this
     */
    public function emails(array $emails)
    {
        $this->emails = $emails;

        return $this;
    }

    /**
     * webhooks
     *
     * @param \BitmovinApiSdk\Models\AnalyticsAlertingWebhook[] $webhooks
     * @return $this
     */
    public function webhooks(array $webhooks)
    {
        $this->webhooks = $webhooks;

        return $this;
    }
}

