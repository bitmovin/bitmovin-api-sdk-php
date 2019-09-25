<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InterlaceFilter extends Filter
{
    /** @var \BitmovinApiSdk\Models\InterlaceMode */
    public $mode;

    /** @var \BitmovinApiSdk\Models\VerticalLowPassFilteringMode */
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
     * @param \BitmovinApiSdk\Models\InterlaceMode $mode
     * @return $this
     */
    public function mode(\BitmovinApiSdk\Models\InterlaceMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * verticalLowPassFilteringMode
     *
     * @param \BitmovinApiSdk\Models\VerticalLowPassFilteringMode $verticalLowPassFilteringMode
     * @return $this
     */
    public function verticalLowPassFilteringMode(\BitmovinApiSdk\Models\VerticalLowPassFilteringMode $verticalLowPassFilteringMode)
    {
        $this->verticalLowPassFilteringMode = $verticalLowPassFilteringMode;

        return $this;
    }
}

