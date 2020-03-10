<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class NotificationStateEntry extends BitmovinResponse
{
    /** @var \BitmovinApiSdk\Models\NotificationStates */
    public $state;

    /** @var bool */
    public $muted;

    /** @var string */
    public $notificationId;

    /** @var string */
    public $resourceId;

    /** @var Carbon */
    public $triggeredAt;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->state = ObjectMapper::map($this->state, NotificationStates::class);
        $this->triggeredAt = ObjectMapper::map($this->triggeredAt, Carbon::class);
    }

    /**
     * state
     *
     * @param \BitmovinApiSdk\Models\NotificationStates $state
     * @return $this
     */
    public function state(\BitmovinApiSdk\Models\NotificationStates $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Indicate if notification was sent (required)
     *
     * @param bool $muted
     * @return $this
     */
    public function muted(bool $muted)
    {
        $this->muted = $muted;

        return $this;
    }

    /**
     * The notification this state belongs to (required)
     *
     * @param string $notificationId
     * @return $this
     */
    public function notificationId(string $notificationId)
    {
        $this->notificationId = $notificationId;

        return $this;
    }

    /**
     * Indicate if triggered for specific resource (required)
     *
     * @param string $resourceId
     * @return $this
     */
    public function resourceId(string $resourceId)
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    /**
     * triggeredAt
     *
     * @param Carbon $triggeredAt
     * @return $this
     */
    public function triggeredAt(Carbon $triggeredAt)
    {
        $this->triggeredAt = $triggeredAt;

        return $this;
    }
}

