<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AgentSessionHistoryResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $sessionId;

    /** @var string */
    public $appName;

    /** @var string */
    public $userId;

    /** @var string */
    public $title;

    /** @var \BitmovinApiSdk\Models\AgentChatMessage[] */
    public $messages;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->messages = ObjectMapper::map($this->messages, AgentChatMessage::class);
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
     * Session message history (required)
     *
     * @param \BitmovinApiSdk\Models\AgentChatMessage[] $messages
     * @return $this
     */
    public function messages(array $messages)
    {
        $this->messages = $messages;

        return $this;
    }
}

