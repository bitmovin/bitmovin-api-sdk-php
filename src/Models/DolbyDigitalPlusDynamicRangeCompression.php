<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyDigitalPlusDynamicRangeCompression extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var DolbyDigitalPlusDynamicRangeCompressionMode */
    public $lineMode;

    /** @var DolbyDigitalPlusDynamicRangeCompressionMode */
    public $rfMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->lineMode = ObjectMapper::map($this->lineMode, DolbyDigitalPlusDynamicRangeCompressionMode::class);
        $this->rfMode = ObjectMapper::map($this->rfMode, DolbyDigitalPlusDynamicRangeCompressionMode::class);
    }

    /**
     * Line mode is intended for use in products providing line‐level or speaker‐level outputs, and is applicable to the widest range of products.  Products such as set‐top boxes, DVD players, DTVs, A/V surround decoders, and outboard Dolby Digital decoders typically use this mode.
     *
     * @param DolbyDigitalPlusDynamicRangeCompressionMode $lineMode
     * @return $this
     */
    public function lineMode(DolbyDigitalPlusDynamicRangeCompressionMode $lineMode)
    {
        $this->lineMode = $lineMode;

        return $this;
    }

    /**
     * RF mode is intended for products such as a low‐cost television receiver.
     *
     * @param DolbyDigitalPlusDynamicRangeCompressionMode $rfMode
     * @return $this
     */
    public function rfMode(DolbyDigitalPlusDynamicRangeCompressionMode $rfMode)
    {
        $this->rfMode = $rfMode;

        return $this;
    }
}

