<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WebhookNotificationWithStreamConditions extends WebhookNotification
{
    /** @var AbstractCondition */
    public $conditions;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->conditions = ObjectMapper::map($this->conditions, AbstractCondition::class);
    }

    /**
     * conditions
     *
     * @param AbstractCondition $conditions
     * @return $this
     */
    public function conditions(AbstractCondition $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }
}

