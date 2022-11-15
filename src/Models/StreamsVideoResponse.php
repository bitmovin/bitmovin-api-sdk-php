<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsVideoResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $assetUrl;

    /** @var string */
    public $title;

    /** @var string */
    public $description;

    /** @var Carbon */
    public $createdAt;

    /** @var StreamsVideoStatus */
    public $status;

    /** @var \BitmovinApiSdk\Models\StreamsVideoEncodingTask[] */
    public $encodingTasks;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->status = ObjectMapper::map($this->status, StreamsVideoStatus::class);
        $this->encodingTasks = ObjectMapper::map($this->encodingTasks, StreamsVideoEncodingTask::class);
    }
}

