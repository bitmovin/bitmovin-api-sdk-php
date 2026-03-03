<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AgentSessionListResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $appName;

    /** @var string */
    public $userId;

    /** @var \BitmovinApiSdk\Models\AgentSessionListItem[] */
    public $sessions;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->sessions = ObjectMapper::map($this->sessions, AgentSessionListItem::class);
    }

    /**
     * Agent application name (required)
     *
     * @param string $appName
     * @return $this
     */
    public function appName(string $appName)
    {
        $this->appName = $appName;

        return $this;
    }

    /**
     * User ID (required)
     *
     * @param string $userId
     * @return $this
     */
    public function userId(string $userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Sessions for the user (required)
     *
     * @param \BitmovinApiSdk\Models\AgentSessionListItem[] $sessions
     * @return $this
     */
    public function sessions(array $sessions)
    {
        $this->sessions = $sessions;

        return $this;
    }
}

