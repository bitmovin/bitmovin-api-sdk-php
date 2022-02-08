<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PerTitle extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var H264PerTitleConfiguration */
    public $h264Configuration;

    /** @var H265PerTitleConfiguration */
    public $h265Configuration;

    /** @var Vp9PerTitleConfiguration */
    public $vp9Configuration;

    /** @var Av1PerTitleConfiguration */
    public $av1Configuration;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->h264Configuration = ObjectMapper::map($this->h264Configuration, H264PerTitleConfiguration::class);
        $this->h265Configuration = ObjectMapper::map($this->h265Configuration, H265PerTitleConfiguration::class);
        $this->vp9Configuration = ObjectMapper::map($this->vp9Configuration, Vp9PerTitleConfiguration::class);
        $this->av1Configuration = ObjectMapper::map($this->av1Configuration, Av1PerTitleConfiguration::class);
    }

    /**
     * Per-Title configuration for H264
     *
     * @param H264PerTitleConfiguration $h264Configuration
     * @return $this
     */
    public function h264Configuration(H264PerTitleConfiguration $h264Configuration)
    {
        $this->h264Configuration = $h264Configuration;

        return $this;
    }

    /**
     * Per-Title configuration for H265
     *
     * @param H265PerTitleConfiguration $h265Configuration
     * @return $this
     */
    public function h265Configuration(H265PerTitleConfiguration $h265Configuration)
    {
        $this->h265Configuration = $h265Configuration;

        return $this;
    }

    /**
     * Per-Title configuration for VP9
     *
     * @param Vp9PerTitleConfiguration $vp9Configuration
     * @return $this
     */
    public function vp9Configuration(Vp9PerTitleConfiguration $vp9Configuration)
    {
        $this->vp9Configuration = $vp9Configuration;

        return $this;
    }

    /**
     * Per-Title configuration for AV1
     *
     * @param Av1PerTitleConfiguration $av1Configuration
     * @return $this
     */
    public function av1Configuration(Av1PerTitleConfiguration $av1Configuration)
    {
        $this->av1Configuration = $av1Configuration;

        return $this;
    }
}

