<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatIngestStream extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $streamId;

    /** @var string */
    public $mediaType;

    /** @var int */
    public $width;

    /** @var int */
    public $height;

    /** @var float */
    public $rate;

    /** @var string */
    public $codec;

    /** @var string */
    public $aspectRatio;

    /** @var int */
    public $bitrate;

    /** @var float */
    public $samplesReadPerSecondAvg;

    /** @var float */
    public $incomingBitrate;

    /** @var int */
    public $keyFrameIntervalMax;

    /** @var float */
    public $keyFrameIntervalAvg;

    /** @var int */
    public $lastTimestamp;

    /** @var int */
    public $lastTimestampTimescale;

    /** @var int */
    public $numberOfAudioChannels;

    /** @var string */
    public $audioChannelFormat;

    /** @var Carbon */
    public $lastArrivalTime;

    /** @var bool */
    public $healthy;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->lastArrivalTime = ObjectMapper::map($this->lastArrivalTime, Carbon::class);
    }

    /**
     * Unique identifier of the stream.
     *
     * @param string $streamId
     * @return $this
     */
    public function streamId(string $streamId)
    {
        $this->streamId = $streamId;

        return $this;
    }

    /**
     * Media type for the stream (e.g., \&quot;video\&quot; or \&quot;audio\&quot;).
     *
     * @param string $mediaType
     * @return $this
     */
    public function mediaType(string $mediaType)
    {
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * Width of the video stream in pixels.
     *
     * @param int $width
     * @return $this
     */
    public function width(int $width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Height of the video stream in pixels.
     *
     * @param int $height
     * @return $this
     */
    public function height(int $height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Frame rate of the video stream.
     *
     * @param float $rate
     * @return $this
     */
    public function rate(float $rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Codec of the stream.
     *
     * @param string $codec
     * @return $this
     */
    public function codec(string $codec)
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * Aspect ratio of the video.
     *
     * @param string $aspectRatio
     * @return $this
     */
    public function aspectRatio(string $aspectRatio)
    {
        $this->aspectRatio = $aspectRatio;

        return $this;
    }

    /**
     * Container format&#39;s bitrate of the stream, in bits per second.
     *
     * @param int $bitrate
     * @return $this
     */
    public function bitrate(int $bitrate)
    {
        $this->bitrate = $bitrate;

        return $this;
    }

    /**
     * Average number of samples/frames read per second.
     *
     * @param float $samplesReadPerSecondAvg
     * @return $this
     */
    public function samplesReadPerSecondAvg(float $samplesReadPerSecondAvg)
    {
        $this->samplesReadPerSecondAvg = $samplesReadPerSecondAvg;

        return $this;
    }

    /**
     * Incoming bitrate measured in bits per second.
     *
     * @param float $incomingBitrate
     * @return $this
     */
    public function incomingBitrate(float $incomingBitrate)
    {
        $this->incomingBitrate = $incomingBitrate;

        return $this;
    }

    /**
     * Largest encountered key-frame interval in milliseconds.
     *
     * @param int $keyFrameIntervalMax
     * @return $this
     */
    public function keyFrameIntervalMax(int $keyFrameIntervalMax)
    {
        $this->keyFrameIntervalMax = $keyFrameIntervalMax;

        return $this;
    }

    /**
     * Average key-frame interval in milliseconds.
     *
     * @param float $keyFrameIntervalAvg
     * @return $this
     */
    public function keyFrameIntervalAvg(float $keyFrameIntervalAvg)
    {
        $this->keyFrameIntervalAvg = $keyFrameIntervalAvg;

        return $this;
    }

    /**
     * Last presentation timestamp (PTS) of the stream.
     *
     * @param int $lastTimestamp
     * @return $this
     */
    public function lastTimestamp(int $lastTimestamp)
    {
        $this->lastTimestamp = $lastTimestamp;

        return $this;
    }

    /**
     * Timescale of lastTimestamp
     *
     * @param int $lastTimestampTimescale
     * @return $this
     */
    public function lastTimestampTimescale(int $lastTimestampTimescale)
    {
        $this->lastTimestampTimescale = $lastTimestampTimescale;

        return $this;
    }

    /**
     * Number of audio channels.
     *
     * @param int $numberOfAudioChannels
     * @return $this
     */
    public function numberOfAudioChannels(int $numberOfAudioChannels)
    {
        $this->numberOfAudioChannels = $numberOfAudioChannels;

        return $this;
    }

    /**
     * Format of the audio channel.
     *
     * @param string $audioChannelFormat
     * @return $this
     */
    public function audioChannelFormat(string $audioChannelFormat)
    {
        $this->audioChannelFormat = $audioChannelFormat;

        return $this;
    }

    /**
     * lastArrivalTime timestamp, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $lastArrivalTime
     * @return $this
     */
    public function lastArrivalTime(Carbon $lastArrivalTime)
    {
        $this->lastArrivalTime = $lastArrivalTime;

        return $this;
    }

    /**
     * Indicates whether this particular stream is healthy.
     *
     * @param bool $healthy
     * @return $this
     */
    public function healthy(bool $healthy)
    {
        $this->healthy = $healthy;

        return $this;
    }
}

