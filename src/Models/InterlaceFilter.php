<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InterlaceFilter extends Filter
{
    /** @var InterlaceMode */
    public $mode;

    /** @var VerticalLowPassFilteringMode */
    public $verticalLowPassFilteringMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->mode = ObjectMapper::map($this->mode, InterlaceMode::class);
        $this->verticalLowPassFilteringMode = ObjectMapper::map($this->verticalLowPassFilteringMode, VerticalLowPassFilteringMode::class);
    }

    /**
     * mode
     *
     * @param InterlaceMode $mode
     * @return $this
     */
    public function mode(InterlaceMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * verticalLowPassFilteringMode
     *
     * @param VerticalLowPassFilteringMode $verticalLowPassFilteringMode
     * @return $this
     */
    public function verticalLowPassFilteringMode(VerticalLowPassFilteringMode $verticalLowPassFilteringMode)
    {
        $this->verticalLowPassFilteringMode = $verticalLowPassFilteringMode;

        return $this;
    }
}

