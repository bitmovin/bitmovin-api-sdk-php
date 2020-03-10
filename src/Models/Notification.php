<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Notification extends BitmovinResponse
{
    /** @var bool */
    public $resolve;

    /** @var string */
    public $resourceId;

    /** @var Carbon */
    public $triggeredAt;

    /** @var string */
    public $type;

    /** @var string */
    public $eventType;

    /** @var string */
    public $category;

    /** @var string */
    public $resourceType;

    /** @var bool */
    public $muted;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->triggeredAt = ObjectMapper::map($this->triggeredAt, Carbon::class);
    }

    /**
     * Notify when condition resolves after it was met
     *
     * @param bool $resolve
     * @return $this
     */
    public function resolve(bool $resolve)
    {
        $this->resolve = $resolve;

        return $this;
    }

    /**
     * Specific resource, e.g. encoding id
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
     * Last time the notification was triggered
     *
     * @param Carbon $triggeredAt
     * @return $this
     */
    public function triggeredAt(Carbon $triggeredAt)
    {
        $this->triggeredAt = $triggeredAt;

        return $this;
    }

    /**
     * type
     *
     * @param string $type
     * @return $this
     */
    public function type(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * eventType
     *
     * @param string $eventType
     * @return $this
     */
    public function eventType(string $eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * category
     *
     * @param string $category
     * @return $this
     */
    public function category(string $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * resourceType
     *
     * @param string $resourceType
     * @return $this
     */
    public function resourceType(string $resourceType)
    {
        $this->resourceType = $resourceType;

        return $this;
    }

    /**
     * muted
     *
     * @param bool $muted
     * @return $this
     */
    public function muted(bool $muted)
    {
        $this->muted = $muted;

        return $this;
    }
}

