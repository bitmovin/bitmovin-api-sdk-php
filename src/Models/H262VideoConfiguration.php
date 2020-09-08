<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class H262VideoConfiguration extends VideoConfiguration
{
    /** @var H262PresetConfiguration */
    public $presetConfiguration;

    /** @var ProfileH262 */
    public $profile;

    /** @var int */
    public $bframes;

    /** @var int */
    public $maxBitrate;

    /** @var int */
    public $minBitrate;

    /** @var int */
    public $bufsize;

    /** @var int */
    public $gopSize;

    /** @var LevelH262 */
    public $level;

    /** @var H262InterlaceMode */
    public $interlaceMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->presetConfiguration = ObjectMapper::map($this->presetConfiguration, H262PresetConfiguration::class);
        $this->profile = ObjectMapper::map($this->profile, ProfileH262::class);
        $this->level = ObjectMapper::map($this->level, LevelH262::class);
        $this->interlaceMode = ObjectMapper::map($this->interlaceMode, H262InterlaceMode::class);
    }

    /**
     * Use a set of well defined configurations preset to support certain use cases. Can be overwritten with more specific values.
     *
     * @param H262PresetConfiguration $presetConfiguration
     * @return $this
     */
    public function presetConfiguration(H262PresetConfiguration $presetConfiguration)
    {
        $this->presetConfiguration = $presetConfiguration;

        return $this;
    }

    /**
     * When setting a profile, all other settings must not exceed the limits which are defined in the profile. Otherwise, a higher profile may be automatically chosen. (required)
     *
     * @param ProfileH262 $profile
     * @return $this
     */
    public function profile(ProfileH262 $profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Sets the amount of b frames.
     *
     * @param int $bframes
     * @return $this
     */
    public function bframes(int $bframes)
    {
        $this->bframes = $bframes;

        return $this;
    }

    /**
     * Maximum Bitrate
     *
     * @param int $maxBitrate
     * @return $this
     */
    public function maxBitrate(int $maxBitrate)
    {
        $this->maxBitrate = $maxBitrate;

        return $this;
    }

    /**
     * Minimum Bitrate
     *
     * @param int $minBitrate
     * @return $this
     */
    public function minBitrate(int $minBitrate)
    {
        $this->minBitrate = $minBitrate;

        return $this;
    }

    /**
     * Playback device buffer size
     *
     * @param int $bufsize
     * @return $this
     */
    public function bufsize(int $bufsize)
    {
        $this->bufsize = $bufsize;

        return $this;
    }

    /**
     * Minimum GOP length, the minimum distance between I-frames
     *
     * @param int $gopSize
     * @return $this
     */
    public function gopSize(int $gopSize)
    {
        $this->gopSize = $gopSize;

        return $this;
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile
     *
     * @param LevelH262 $level
     * @return $this
     */
    public function level(LevelH262 $level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Using TOP_FIELD_FIRST or BOTTOM_FIELD_FIRST will output interlaced video
     *
     * @param H262InterlaceMode $interlaceMode
     * @return $this
     */
    public function interlaceMode(H262InterlaceMode $interlaceMode)
    {
        $this->interlaceMode = $interlaceMode;

        return $this;
    }
}

