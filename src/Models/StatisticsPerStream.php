<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StatisticsPerStream extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $streamId;

    /** @var string */
    public $codecConfigId;

    /** @var float */
    public $multiplicator;

    /** @var int */
    public $encodedBytes;

    /** @var float */
    public $encodedSeconds;

    /** @var float */
    public $billableMinutes;

    /** @var int */
    public $width;

    /** @var int */
    public $height;

    /** @var float */
    public $rate;

    /** @var int */
    public $bitrate;

    /** @var \BitmovinApiSdk\Models\CodecConfigType */
    public $codec;

    /** @var \BitmovinApiSdk\Models\StatisticsResolution */
    public $resolution;

    /** @var \BitmovinApiSdk\Models\EncodingMode */
    public $encodingMode;

    /** @var float */
    public $encodingModeMultiplicator;

    /** @var \BitmovinApiSdk\Models\StatisticsPerTitleStream */
    public $perTitleResultStream;

    /** @var float */
    public $perTitleMultiplicator;

    /** @var \BitmovinApiSdk\Models\PsnrPerStreamMode */
    public $psnrMode;

    /** @var float */
    public $psnrMultiplicator;

    /** @var \BitmovinApiSdk\Models\DolbyVisionPerStreamMode */
    public $dolbyVisionMode;

    /** @var float */
    public $dolbyVisionMultiplicator;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->codec = ObjectMapper::map($this->codec, CodecConfigType::class);
        $this->resolution = ObjectMapper::map($this->resolution, StatisticsResolution::class);
        $this->encodingMode = ObjectMapper::map($this->encodingMode, EncodingMode::class);
        $this->perTitleResultStream = ObjectMapper::map($this->perTitleResultStream, StatisticsPerTitleStream::class);
        $this->psnrMode = ObjectMapper::map($this->psnrMode, PsnrPerStreamMode::class);
        $this->dolbyVisionMode = ObjectMapper::map($this->dolbyVisionMode, DolbyVisionPerStreamMode::class);
    }

    /**
     * ID of the stream (required)
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
     * ID of the condec configuration (required)
     *
     * @param string $codecConfigId
     * @return $this
     */
    public function codecConfigId(string $codecConfigId)
    {
        $this->codecConfigId = $codecConfigId;

        return $this;
    }

    /**
     * Multiplier for the encoded minutes. Depends on muxing type. (required)
     *
     * @param float $multiplicator
     * @return $this
     */
    public function multiplicator(float $multiplicator)
    {
        $this->multiplicator = $multiplicator;

        return $this;
    }

    /**
     * Encoded bytes. (required)
     *
     * @param int $encodedBytes
     * @return $this
     */
    public function encodedBytes(int $encodedBytes)
    {
        $this->encodedBytes = $encodedBytes;

        return $this;
    }

    /**
     * Length of the stream. (required)
     *
     * @param float $encodedSeconds
     * @return $this
     */
    public function encodedSeconds(float $encodedSeconds)
    {
        $this->encodedSeconds = $encodedSeconds;

        return $this;
    }

    /**
     * Minutes you will be charged for (billableMinutes &#x3D; encodedSeconds * multiplicator) (required)
     *
     * @param float $billableMinutes
     * @return $this
     */
    public function billableMinutes(float $billableMinutes)
    {
        $this->billableMinutes = $billableMinutes;

        return $this;
    }

    /**
     * Video width, only if video stream
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
     * Video height, only if video stream
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
     * If it&#39; a video stream this value is the FPS, for audio it&#39;s the sample rate. (required)
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
     * Bitrate of the stream (required)
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
     * codec
     *
     * @param \BitmovinApiSdk\Models\CodecConfigType $codec
     * @return $this
     */
    public function codec(\BitmovinApiSdk\Models\CodecConfigType $codec)
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * resolution
     *
     * @param \BitmovinApiSdk\Models\StatisticsResolution $resolution
     * @return $this
     */
    public function resolution(\BitmovinApiSdk\Models\StatisticsResolution $resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * encodingMode
     *
     * @param \BitmovinApiSdk\Models\EncodingMode $encodingMode
     * @return $this
     */
    public function encodingMode(\BitmovinApiSdk\Models\EncodingMode $encodingMode)
    {
        $this->encodingMode = $encodingMode;

        return $this;
    }

    /**
     * The output minutes multiplicator for the given encodingMode
     *
     * @param float $encodingModeMultiplicator
     * @return $this
     */
    public function encodingModeMultiplicator(float $encodingModeMultiplicator)
    {
        $this->encodingModeMultiplicator = $encodingModeMultiplicator;

        return $this;
    }

    /**
     * perTitleResultStream
     *
     * @param \BitmovinApiSdk\Models\StatisticsPerTitleStream $perTitleResultStream
     * @return $this
     */
    public function perTitleResultStream(\BitmovinApiSdk\Models\StatisticsPerTitleStream $perTitleResultStream)
    {
        $this->perTitleResultStream = $perTitleResultStream;

        return $this;
    }

    /**
     * The output minutes multiplicator for per-title
     *
     * @param float $perTitleMultiplicator
     * @return $this
     */
    public function perTitleMultiplicator(float $perTitleMultiplicator)
    {
        $this->perTitleMultiplicator = $perTitleMultiplicator;

        return $this;
    }

    /**
     * psnrMode
     *
     * @param \BitmovinApiSdk\Models\PsnrPerStreamMode $psnrMode
     * @return $this
     */
    public function psnrMode(\BitmovinApiSdk\Models\PsnrPerStreamMode $psnrMode)
    {
        $this->psnrMode = $psnrMode;

        return $this;
    }

    /**
     * The output minutes multiplicator for psnr streams
     *
     * @param float $psnrMultiplicator
     * @return $this
     */
    public function psnrMultiplicator(float $psnrMultiplicator)
    {
        $this->psnrMultiplicator = $psnrMultiplicator;

        return $this;
    }

    /**
     * dolbyVisionMode
     *
     * @param \BitmovinApiSdk\Models\DolbyVisionPerStreamMode $dolbyVisionMode
     * @return $this
     */
    public function dolbyVisionMode(\BitmovinApiSdk\Models\DolbyVisionPerStreamMode $dolbyVisionMode)
    {
        $this->dolbyVisionMode = $dolbyVisionMode;

        return $this;
    }

    /**
     * The output minutes multiplicator for Dolby Vision streams
     *
     * @param float $dolbyVisionMultiplicator
     * @return $this
     */
    public function dolbyVisionMultiplicator(float $dolbyVisionMultiplicator)
    {
        $this->dolbyVisionMultiplicator = $dolbyVisionMultiplicator;

        return $this;
    }
}

