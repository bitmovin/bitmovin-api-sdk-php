<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsStyleConfigPlayerStyle extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $playbackMarkerBgColor;

    /** @var string */
    public $playbackMarkerBorderColor;

    /** @var string */
    public $playbackTrackPlayedColor;

    /** @var string */
    public $playbackTrackBufferedColor;

    /** @var string */
    public $playbackTrackBgColor;

    /** @var string */
    public $textColor;

    /** @var string */
    public $backgroundColor;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Playback marker background color
     *
     * @param string $playbackMarkerBgColor
     * @return $this
     */
    public function playbackMarkerBgColor(string $playbackMarkerBgColor)
    {
        $this->playbackMarkerBgColor = $playbackMarkerBgColor;

        return $this;
    }

    /**
     * Playback marker border color
     *
     * @param string $playbackMarkerBorderColor
     * @return $this
     */
    public function playbackMarkerBorderColor(string $playbackMarkerBorderColor)
    {
        $this->playbackMarkerBorderColor = $playbackMarkerBorderColor;

        return $this;
    }

    /**
     * Playback track played color
     *
     * @param string $playbackTrackPlayedColor
     * @return $this
     */
    public function playbackTrackPlayedColor(string $playbackTrackPlayedColor)
    {
        $this->playbackTrackPlayedColor = $playbackTrackPlayedColor;

        return $this;
    }

    /**
     * Playback track buffered color
     *
     * @param string $playbackTrackBufferedColor
     * @return $this
     */
    public function playbackTrackBufferedColor(string $playbackTrackBufferedColor)
    {
        $this->playbackTrackBufferedColor = $playbackTrackBufferedColor;

        return $this;
    }

    /**
     * Playback track background color
     *
     * @param string $playbackTrackBgColor
     * @return $this
     */
    public function playbackTrackBgColor(string $playbackTrackBgColor)
    {
        $this->playbackTrackBgColor = $playbackTrackBgColor;

        return $this;
    }

    /**
     * Text color
     *
     * @param string $textColor
     * @return $this
     */
    public function textColor(string $textColor)
    {
        $this->textColor = $textColor;

        return $this;
    }

    /**
     * Background color
     *
     * @param string $backgroundColor
     * @return $this
     */
    public function backgroundColor(string $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }
}

