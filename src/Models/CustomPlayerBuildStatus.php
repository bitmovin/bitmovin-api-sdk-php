<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CustomPlayerBuildStatus extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Status */
    public $status;

    /** @var int */
    public $eta;

    /** @var int */
    public $progress;

    /** @var \BitmovinApiSdk\Models\Message */
    public $messages;

    /** @var string */
    public $subtasks;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->status = ObjectMapper::map($this->status, Status::class);
        $this->messages = ObjectMapper::map($this->messages, Message::class);
    }

    /**
     * Status of the player build (required)
     *
     * @param Status $status
     * @return $this
     */
    public function status(Status $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * The estimated time span of the custom player build in seconds.
     *
     * @param int $eta
     * @return $this
     */
    public function eta(int $eta)
    {
        $this->eta = $eta;

        return $this;
    }

    /**
     * The actual progress of the custom player build. (required)
     *
     * @param int $progress
     * @return $this
     */
    public function progress(int $progress)
    {
        $this->progress = $progress;

        return $this;
    }

    /**
     * messages
     *
     * @param \BitmovinApiSdk\Models\Message $messages
     * @return $this
     */
    public function messages(\BitmovinApiSdk\Models\Message $messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * subtasks
     *
     * @param string $subtasks
     * @return $this
     */
    public function subtasks(string $subtasks)
    {
        $this->subtasks = $subtasks;

        return $this;
    }
}

