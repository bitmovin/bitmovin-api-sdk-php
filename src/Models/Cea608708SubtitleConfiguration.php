<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Cea608708SubtitleConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var bool */
    public $passthroughActivated;

    /** @var PassthroughMode */
    public $passthroughMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->passthroughMode = ObjectMapper::map($this->passthroughMode, PassthroughMode::class);
    }

    /**
     * If enabled, CEA 608 an CEA 708 subtitles will be copied from the input video stream to the output video stream. Note: This does not work, if the output framerate is different than the input framerate (except doubling the framerate with deinterlacing per field)
     *
     * @param bool $passthroughActivated
     * @return $this
     */
    public function passthroughActivated(bool $passthroughActivated)
    {
        $this->passthroughActivated = $passthroughActivated;

        return $this;
    }

    /**
     * passthroughMode
     *
     * @param PassthroughMode $passthroughMode
     * @return $this
     */
    public function passthroughMode(PassthroughMode $passthroughMode)
    {
        $this->passthroughMode = $passthroughMode;

        return $this;
    }
}

