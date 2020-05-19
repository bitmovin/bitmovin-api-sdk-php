<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamInfosDetails extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var MediaType */
    public $mediaType;

    /** @var int */
    public $width;

    /** @var int */
    public $height;

    /** @var int */
    public $rate;

    /** @var LiveEncodingCodec */
    public $codec;

    /** @var float */
    public $samplesReadPerSecondMin;

    /** @var float */
    public $samplesReadPerSecondMax;

    /** @var float */
    public $samplesReadPerSecondAvg;

    /** @var float */
    public $samplesBackupPerSecondMin;

    /** @var float */
    public $samplesBackupPerSecondMax;

    /** @var float */
    public $samplesBackupPerSecondAvg;

    /** @var float */
    public $bytesReadPerSecondMin;

    /** @var float */
    public $bytesReadPerSecondMax;

    /** @var float */
    public $bytesReadPerSecondAvg;

    /** @var float */
    public $bytesBackupPerSecondMin;

    /** @var float */
    public $bytesBackupPerSecondMax;

    /** @var float */
    public $bytesBackupPerSecondAvg;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->mediaType = ObjectMapper::map($this->mediaType, MediaType::class);
        $this->codec = ObjectMapper::map($this->codec, LiveEncodingCodec::class);
    }

    /**
     * The id of the stream (required)
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
     * The media type of the stream (required)
     *
     * @param MediaType $mediaType
     * @return $this
     */
    public function mediaType(MediaType $mediaType)
    {
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * The width of the stream, if it is a video stream
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
     * The height of the stream, if it is a video stream
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
     * The rate (sample rate / fps) of the stream (required)
     *
     * @param int $rate
     * @return $this
     */
    public function rate(int $rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * The codec of the input stream (required)
     *
     * @param LiveEncodingCodec $codec
     * @return $this
     */
    public function codec(LiveEncodingCodec $codec)
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * The minimum samples read per second within the last minute (required)
     *
     * @param float $samplesReadPerSecondMin
     * @return $this
     */
    public function samplesReadPerSecondMin(float $samplesReadPerSecondMin)
    {
        $this->samplesReadPerSecondMin = $samplesReadPerSecondMin;

        return $this;
    }

    /**
     * The maximum samples read per second within the last minute (required)
     *
     * @param float $samplesReadPerSecondMax
     * @return $this
     */
    public function samplesReadPerSecondMax(float $samplesReadPerSecondMax)
    {
        $this->samplesReadPerSecondMax = $samplesReadPerSecondMax;

        return $this;
    }

    /**
     * The average samples read per second within the last minute (required)
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
     * The minimum amount of backup samples used per second within the last minute. This will be written when no live stream is ingested. The last picture will be repeated with silent audio. (required)
     *
     * @param float $samplesBackupPerSecondMin
     * @return $this
     */
    public function samplesBackupPerSecondMin(float $samplesBackupPerSecondMin)
    {
        $this->samplesBackupPerSecondMin = $samplesBackupPerSecondMin;

        return $this;
    }

    /**
     * The maximum amount of backup samples used per second within the last minute. This will be written when no live stream is ingested. The last picture will be repeated with silent audio. (required)
     *
     * @param float $samplesBackupPerSecondMax
     * @return $this
     */
    public function samplesBackupPerSecondMax(float $samplesBackupPerSecondMax)
    {
        $this->samplesBackupPerSecondMax = $samplesBackupPerSecondMax;

        return $this;
    }

    /**
     * The average amount of backup samples used per second within the last minute. This will be written when no live stream is ingested. The last picture will be repeated with silent audio. (required)
     *
     * @param float $samplesBackupPerSecondAvg
     * @return $this
     */
    public function samplesBackupPerSecondAvg(float $samplesBackupPerSecondAvg)
    {
        $this->samplesBackupPerSecondAvg = $samplesBackupPerSecondAvg;

        return $this;
    }

    /**
     * The minimum bytes read per second within the last minute (required)
     *
     * @param float $bytesReadPerSecondMin
     * @return $this
     */
    public function bytesReadPerSecondMin(float $bytesReadPerSecondMin)
    {
        $this->bytesReadPerSecondMin = $bytesReadPerSecondMin;

        return $this;
    }

    /**
     * The maximum bytes read per second within the last minute (required)
     *
     * @param float $bytesReadPerSecondMax
     * @return $this
     */
    public function bytesReadPerSecondMax(float $bytesReadPerSecondMax)
    {
        $this->bytesReadPerSecondMax = $bytesReadPerSecondMax;

        return $this;
    }

    /**
     * The average bytes read per second within the last minute (required)
     *
     * @param float $bytesReadPerSecondAvg
     * @return $this
     */
    public function bytesReadPerSecondAvg(float $bytesReadPerSecondAvg)
    {
        $this->bytesReadPerSecondAvg = $bytesReadPerSecondAvg;

        return $this;
    }

    /**
     * The minimum amount of backup bytes used per second within the last minute. This will be written when no live stream is ingested. The last picture will be repeated with silent audio. (required)
     *
     * @param float $bytesBackupPerSecondMin
     * @return $this
     */
    public function bytesBackupPerSecondMin(float $bytesBackupPerSecondMin)
    {
        $this->bytesBackupPerSecondMin = $bytesBackupPerSecondMin;

        return $this;
    }

    /**
     * The maximum amount of backup bytes used per second within the last minute. This will be written when no live stream is ingested. The last picture will be repeated with silent audio. (required)
     *
     * @param float $bytesBackupPerSecondMax
     * @return $this
     */
    public function bytesBackupPerSecondMax(float $bytesBackupPerSecondMax)
    {
        $this->bytesBackupPerSecondMax = $bytesBackupPerSecondMax;

        return $this;
    }

    /**
     * The average amount of backup bytes used per second within the last minute. This will be written when no live stream is ingested. The last picture will be repeated with silent audio. (required)
     *
     * @param float $bytesBackupPerSecondAvg
     * @return $this
     */
    public function bytesBackupPerSecondAvg(float $bytesBackupPerSecondAvg)
    {
        $this->bytesBackupPerSecondAvg = $bytesBackupPerSecondAvg;

        return $this;
    }
}

