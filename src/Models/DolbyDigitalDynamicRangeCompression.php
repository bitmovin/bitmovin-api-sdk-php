<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyDigitalDynamicRangeCompression extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var DolbyDigitalDynamicRangeCompressionMode */
    public $lineMode;

    /** @var DolbyDigitalDynamicRangeCompressionMode */
    public $rfMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->lineMode = ObjectMapper::map($this->lineMode, DolbyDigitalDynamicRangeCompressionMode::class);
        $this->rfMode = ObjectMapper::map($this->rfMode, DolbyDigitalDynamicRangeCompressionMode::class);
    }

    /**
     * Line mode is intended for use in products providing line‐level or speaker‐level outputs, and is applicable to the widest range of products. Products such as set‐top boxes, DVD players, DTVs, A/V surround decoders, and outboard Dolby Digital decoders typically use this mode.
     *
     * @param DolbyDigitalDynamicRangeCompressionMode $lineMode
     * @return $this
     */
    public function lineMode(DolbyDigitalDynamicRangeCompressionMode $lineMode)
    {
        $this->lineMode = $lineMode;

        return $this;
    }

    /**
     * RF mode is intended for products such as a low‐cost television receivers.
     *
     * @param DolbyDigitalDynamicRangeCompressionMode $rfMode
     * @return $this
     */
    public function rfMode(DolbyDigitalDynamicRangeCompressionMode $rfMode)
    {
        $this->rfMode = $rfMode;

        return $this;
    }
}

