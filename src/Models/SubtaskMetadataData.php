<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SubtaskMetadataData extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $avgFramesEncodedPerSecond;

    /** @var int */
    public $bytesEncoded;

    /** @var int */
    public $framesAnalysed;

    /** @var int */
    public $framesEncoded;

    /** @var float */
    public $realtimeFactor;

    /** @var int */
    public $size;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * avgFramesEncodedPerSecond
     *
     * @param float $avgFramesEncodedPerSecond
     * @return $this
     */
    public function avgFramesEncodedPerSecond(float $avgFramesEncodedPerSecond)
    {
        $this->avgFramesEncodedPerSecond = $avgFramesEncodedPerSecond;

        return $this;
    }

    /**
     * bytesEncoded
     *
     * @param int $bytesEncoded
     * @return $this
     */
    public function bytesEncoded(int $bytesEncoded)
    {
        $this->bytesEncoded = $bytesEncoded;

        return $this;
    }

    /**
     * framesAnalysed
     *
     * @param int $framesAnalysed
     * @return $this
     */
    public function framesAnalysed(int $framesAnalysed)
    {
        $this->framesAnalysed = $framesAnalysed;

        return $this;
    }

    /**
     * framesEncoded
     *
     * @param int $framesEncoded
     * @return $this
     */
    public function framesEncoded(int $framesEncoded)
    {
        $this->framesEncoded = $framesEncoded;

        return $this;
    }

    /**
     * realtimeFactor
     *
     * @param float $realtimeFactor
     * @return $this
     */
    public function realtimeFactor(float $realtimeFactor)
    {
        $this->realtimeFactor = $realtimeFactor;

        return $this;
    }

    /**
     * size
     *
     * @param int $size
     * @return $this
     */
    public function size(int $size)
    {
        $this->size = $size;

        return $this;
    }
}

