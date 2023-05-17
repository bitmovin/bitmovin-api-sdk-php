<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsLiveResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $streamKey;

    /** @var string */
    public $title;

    /** @var string */
    public $description;

    /** @var Carbon */
    public $createdAt;

    /** @var StreamsLiveLifeCycle */
    public $lifeCycle;

    /** @var \BitmovinApiSdk\Models\StreamsConfigResponse */
    public $config;

    /** @var string */
    public $posterUrl;

    /** @var \BitmovinApiSdk\Models\StreamsAdConfigResponse */
    public $adConfig;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->lifeCycle = ObjectMapper::map($this->lifeCycle, StreamsLiveLifeCycle::class);
        $this->config = ObjectMapper::map($this->config, StreamsConfigResponse::class);
        $this->adConfig = ObjectMapper::map($this->adConfig, StreamsAdConfigResponse::class);
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

    /**
     * adConfig
     *
     * @param \BitmovinApiSdk\Models\StreamsAdConfigResponse $adConfig
     * @return $this
     */
    public function adConfig(\BitmovinApiSdk\Models\StreamsAdConfigResponse $adConfig)
    {
        $this->adConfig = $adConfig;

        return $this;
    }
}

