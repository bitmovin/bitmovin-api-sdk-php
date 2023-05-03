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

    /** @var \BitmovinApiSdk\Models\StreamsConfigResponse */
    public $config;

    /** @var \BitmovinApiSdk\Models\StreamsVideoEncodingTask[] */
    public $encodingTasks;

    /** @var string */
    public $posterUrl;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->status = ObjectMapper::map($this->status, StreamsVideoStatus::class);
        $this->config = ObjectMapper::map($this->config, StreamsConfigResponse::class);
        $this->encodingTasks = ObjectMapper::map($this->encodingTasks, StreamsVideoEncodingTask::class);
    }

    /**
     * config
     *
     * @param \BitmovinApiSdk\Models\StreamsConfigResponse $config
     * @return $this
     */
    public function config(\BitmovinApiSdk\Models\StreamsConfigResponse $config)
    {
        $this->config = $config;

        return $this;
    }
}

