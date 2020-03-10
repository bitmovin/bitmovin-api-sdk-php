<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EmailNotification extends Notification
{
    /** @var string[] */
    public $emails;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * emails
     *
     * @param string[] $emails
     * @return $this
     */
    public function emails(array $emails)
    {
        $this->emails = $emails;

        return $this;
    }
}

