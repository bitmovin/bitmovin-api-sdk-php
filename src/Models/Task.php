<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Task extends BitmovinResponse
{
    /** @var Status */
    public $status;

    /** @var float */
    public $eta;

    /** @var int */
    public $progress;

    /** @var \BitmovinApiSdk\Models\Subtask[] */
    public $subtasks;

    /** @var \BitmovinApiSdk\Models\Message[] */
    public $messages;

    /** @var Carbon */
    public $createdAt;

    /** @var Carbon */
    public $queuedAt;

    /** @var Carbon */
    public $runningAt;

    /** @var Carbon */
    public $finishedAt;

    /** @var Carbon */
    public $errorAt;

    /** @var ErrorDetails */
    public $error;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, Status::class);
        $this->subtasks = ObjectMapper::map($this->subtasks, Subtask::class);
        $this->messages = ObjectMapper::map($this->messages, Message::class);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->queuedAt = ObjectMapper::map($this->queuedAt, Carbon::class);
        $this->runningAt = ObjectMapper::map($this->runningAt, Carbon::class);
        $this->finishedAt = ObjectMapper::map($this->finishedAt, Carbon::class);
        $this->errorAt = ObjectMapper::map($this->errorAt, Carbon::class);
        $this->error = ObjectMapper::map($this->error, ErrorDetails::class);
    }

    /**
     * Current status (required)
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
     * Estimated ETA in seconds
     *
     * @param float $eta
     * @return $this
     */
    public function eta(float $eta)
    {
        $this->eta = $eta;

        return $this;
    }

    /**
     * Progress in percent
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
     * List of subtasks
     *
     * @param \BitmovinApiSdk\Models\Subtask[] $subtasks
     * @return $this
     */
    public function subtasks(array $subtasks)
    {
        $this->subtasks = $subtasks;

        return $this;
    }

    /**
     * Task specific messages
     *
     * @param \BitmovinApiSdk\Models\Message[] $messages
     * @return $this
     */
    public function messages(array $messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * Timestamp when the task was created, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $createdAt
     * @return $this
     */
    public function createdAt(Carbon $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Timestamp when the task status changed to \&quot;QUEUED\&quot;, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $queuedAt
     * @return $this
     */
    public function queuedAt(Carbon $queuedAt)
    {
        $this->queuedAt = $queuedAt;

        return $this;
    }

    /**
     * Timestamp when the task status changed to to \&quot;RUNNING\&quot;, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $runningAt
     * @return $this
     */
    public function runningAt(Carbon $runningAt)
    {
        $this->runningAt = $runningAt;

        return $this;
    }

    /**
     * Timestamp when the task status changed to \&quot;FINISHED\&quot;, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $finishedAt
     * @return $this
     */
    public function finishedAt(Carbon $finishedAt)
    {
        $this->finishedAt = $finishedAt;

        return $this;
    }

    /**
     * Timestamp when the task status changed to \&quot;ERROR\&quot;, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $errorAt
     * @return $this
     */
    public function errorAt(Carbon $errorAt)
    {
        $this->errorAt = $errorAt;

        return $this;
    }

    /**
     * Additional optional error details
     *
     * @param ErrorDetails $error
     * @return $this
     */
    public function error(ErrorDetails $error)
    {
        $this->error = $error;

        return $this;
    }
}

