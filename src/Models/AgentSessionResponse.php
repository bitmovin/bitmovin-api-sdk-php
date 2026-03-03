<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AgentSessionResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $sessionId;

    /** @var string */
    public $appName;

    /** @var string */
    public $userId;

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
}

