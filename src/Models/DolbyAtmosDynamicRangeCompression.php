<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyAtmosDynamicRangeCompression extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var DolbyAtmosDynamicRangeCompressionMode */
    public $lineMode;

    /** @var DolbyAtmosDynamicRangeCompressionMode */
    public $rfMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->lineMode = ObjectMapper::map($this->lineMode, DolbyAtmosDynamicRangeCompressionMode::class);
        $this->rfMode = ObjectMapper::map($this->rfMode, DolbyAtmosDynamicRangeCompressionMode::class);
    }

    /**
     * Line mode is intended for use in products providing line‐level or speaker‐level outputs, and is applicable to the widest range of products. Products such as set‐top boxes, DVD players, DTVs, A/V surround decoders, and outboard Dolby Atmos decoders typically use this mode.
     *
     * @param DolbyAtmosDynamicRangeCompressionMode $lineMode
     * @return $this
     */
    public function lineMode(DolbyAtmosDynamicRangeCompressionMode $lineMode)
    {
        $this->lineMode = $lineMode;

        return $this;
    }

    /**
     * RF mode is intended for products such as a low‐cost television receivers.
     *
     * @param DolbyAtmosDynamicRangeCompressionMode $rfMode
     * @return $this
     */
    public function rfMode(DolbyAtmosDynamicRangeCompressionMode $rfMode)
    {
        $this->rfMode = $rfMode;

        return $this;
    }
}

