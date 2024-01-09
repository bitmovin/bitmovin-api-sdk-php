<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsVideoResponse extends StreamsResponse
{
    /** @var string */
    public $assetUrl;

    /** @var StreamsVideoStatus */
    public $status;

    /** @var \BitmovinApiSdk\Models\StreamsStyleConfigResponse */
    public $styleConfig;

    /** @var \BitmovinApiSdk\Models\StreamsVideoEncodingTask[] */
    public $encodingTasks;

    /** @var string */
    public $posterUrl;

    /** @var \BitmovinApiSdk\Models\StreamsAdConfigResponse */
    public $adConfig;

    /** @var \BitmovinApiSdk\Models\StreamsContentProtectionResponse */
    public $contentProtection;

    /** @var StreamsTrimmingStatus */
    public $trimming;

    /** @var string */
    public $downloadUrl;

    /** @var bool */
    public $signed;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, StreamsVideoStatus::class);
        $this->styleConfig = ObjectMapper::map($this->styleConfig, StreamsStyleConfigResponse::class);
        $this->encodingTasks = ObjectMapper::map($this->encodingTasks, StreamsVideoEncodingTask::class);
        $this->adConfig = ObjectMapper::map($this->adConfig, StreamsAdConfigResponse::class);
        $this->contentProtection = ObjectMapper::map($this->contentProtection, StreamsContentProtectionResponse::class);
        $this->trimming = ObjectMapper::map($this->trimming, StreamsTrimmingStatus::class);
    }

    /**
     * styleConfig
     *
     * @param \BitmovinApiSdk\Models\StreamsStyleConfigResponse $styleConfig
     * @return $this
     */
    public function styleConfig(\BitmovinApiSdk\Models\StreamsStyleConfigResponse $styleConfig)
    {
        $this->styleConfig = $styleConfig;

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

    /**
     * contentProtection
     *
     * @param \BitmovinApiSdk\Models\StreamsContentProtectionResponse $contentProtection
     * @return $this
     */
    public function contentProtection(\BitmovinApiSdk\Models\StreamsContentProtectionResponse $contentProtection)
    {
        $this->contentProtection = $contentProtection;

        return $this;
    }
}

