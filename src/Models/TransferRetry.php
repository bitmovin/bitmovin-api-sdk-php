<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TransferRetry extends BitmovinResource
{
    /** @var Status */
    public $status;

    /** @var Carbon */
    public $startedAt;

    /** @var Carbon */
    public $finishedAt;

    /** @var Carbon */
    public $errorAt;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, Status::class);
        $this->startedAt = ObjectMapper::map($this->startedAt, Carbon::class);
        $this->finishedAt = ObjectMapper::map($this->finishedAt, Carbon::class);
        $this->errorAt = ObjectMapper::map($this->errorAt, Carbon::class);
    }
}

