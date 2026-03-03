<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AgentSessionListItem extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $sessionId;

    /** @var string */
    public $title;

    /** @var float */
    public $lastUpdateTimeSeconds;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Session ID (required)
     *
     * @param string $sessionId
     * @return $this
     */
    public function sessionId(string $sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Session title
     *
     * @param string $title
     * @return $this
     */
    public function title(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Last update time in seconds
     *
     * @param float $lastUpdateTimeSeconds
     * @return $this
     */
    public function lastUpdateTimeSeconds(float $lastUpdateTimeSeconds)
    {
        $this->lastUpdateTimeSeconds = $lastUpdateTimeSeconds;

        return $this;
    }
}

