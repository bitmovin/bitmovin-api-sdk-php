<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Subtask extends BitmovinResponse
{
    /** @var Status */
    public $status;

    /** @var int */
    public $progress;

    /** @var string */
    public $name;

    /** @var \BitmovinApiSdk\Models\Message[] */
    public $messages;

    /** @var \BitmovinApiSdk\Models\SubtaskMetadata[] */
    public $metadata;

    /** @var Carbon */
    public $createdAt;

    /** @var Carbon */
    public $updatedAt;

    /** @var Carbon */
    public $startedAt;

    /** @var Carbon */
    public $queuedAt;

    /** @var Carbon */
    public $runningAt;

    /** @var Carbon */
    public $finishedAt;

    /** @var Carbon */
    public $errorAt;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, Status::class);
        $this->messages = ObjectMapper::map($this->messages, Message::class);
        $this->metadata = ObjectMapper::map($this->metadata, SubtaskMetadata::class);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->updatedAt = ObjectMapper::map($this->updatedAt, Carbon::class);
        $this->startedAt = ObjectMapper::map($this->startedAt, Carbon::class);
        $this->queuedAt = ObjectMapper::map($this->queuedAt, Carbon::class);
        $this->runningAt = ObjectMapper::map($this->runningAt, Carbon::class);
        $this->finishedAt = ObjectMapper::map($this->finishedAt, Carbon::class);
        $this->errorAt = ObjectMapper::map($this->errorAt, Carbon::class);
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
     * Name of the subtask (required)
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

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
     * Task specific metadata
     *
     * @param \BitmovinApiSdk\Models\SubtaskMetadata[] $metadata
     * @return $this
     */
    public function metadata(array $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Timestamp when the subtask was created, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
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
     * Timestamp when the subtask was last updated, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $updatedAt
     * @return $this
     */
    public function updatedAt(Carbon $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Timestamp when the subtask was started, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $startedAt
     * @return $this
     */
    public function startedAt(Carbon $startedAt)
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * Timestamp when the subtask status changed to &#39;QUEUED&#39;, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
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
     * Timestamp when the subtask status changed to &#39;RUNNING&#39;, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
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
     * Timestamp when the subtask status changed to a final state like  &#39;FINISHED&#39;, &#39;ERROR&#39;, &#39;CANCELED&#39;, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ  Note that this timestamp might be inaccurate for subtasks which ran prior to the [1.50.0 REST API release](https://bitmovin.com/docs/encoding/changelogs/rest).
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
     * Timestamp when the subtask status changed to &#39;ERROR&#39;, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ  Note that this timestamp is deprecated and is equivalent to finishedAt in case of an &#39;ERROR&#39;.
     *
     * @param Carbon $errorAt
     * @return $this
     */
    public function errorAt(Carbon $errorAt)
    {
        $this->errorAt = $errorAt;

        return $this;
    }
}

