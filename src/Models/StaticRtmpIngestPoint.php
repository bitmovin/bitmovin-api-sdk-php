<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StaticRtmpIngestPoint extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $name;

    /** @var \BitmovinApiSdk\Models\StreamKeyConfiguration */
    public $streamKeyConfiguration;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->streamKeyConfiguration = ObjectMapper::map($this->streamKeyConfiguration, StreamKeyConfiguration::class);
    }

    /**
     * The ID of the created static rtmp ingest point
     *
     * @param string $id
     * @return $this
     */
    public function id(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Name of the ingest point. This can be helpful for easier identifying your ingest points
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
     * streamKeyConfiguration
     *
     * @param \BitmovinApiSdk\Models\StreamKeyConfiguration $streamKeyConfiguration
     * @return $this
     */
    public function streamKeyConfiguration(\BitmovinApiSdk\Models\StreamKeyConfiguration $streamKeyConfiguration)
    {
        $this->streamKeyConfiguration = $streamKeyConfiguration;

        return $this;
    }
}

