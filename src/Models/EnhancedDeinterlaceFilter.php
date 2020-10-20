<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EnhancedDeinterlaceFilter extends Filter
{
    /** @var \BitmovinApiSdk\Models\EnhancedDeinterlaceParity */
    public $parity;

    /** @var \BitmovinApiSdk\Models\EnhancedDeinterlaceMode */
    public $mode;

    /** @var \BitmovinApiSdk\Models\EnhancedDeinterlaceAutoEnable */
    public $autoEnable;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->parity = ObjectMapper::map($this->parity, EnhancedDeinterlaceParity::class);
        $this->mode = ObjectMapper::map($this->mode, EnhancedDeinterlaceMode::class);
        $this->autoEnable = ObjectMapper::map($this->autoEnable, EnhancedDeinterlaceAutoEnable::class);
    }

    /**
     * parity
     *
     * @param \BitmovinApiSdk\Models\EnhancedDeinterlaceParity $parity
     * @return $this
     */
    public function parity(\BitmovinApiSdk\Models\EnhancedDeinterlaceParity $parity)
    {
        $this->parity = $parity;

        return $this;
    }

    /**
     * mode
     *
     * @param \BitmovinApiSdk\Models\EnhancedDeinterlaceMode $mode
     * @return $this
     */
    public function mode(\BitmovinApiSdk\Models\EnhancedDeinterlaceMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * autoEnable
     *
     * @param \BitmovinApiSdk\Models\EnhancedDeinterlaceAutoEnable $autoEnable
     * @return $this
     */
    public function autoEnable(\BitmovinApiSdk\Models\EnhancedDeinterlaceAutoEnable $autoEnable)
    {
        $this->autoEnable = $autoEnable;

        return $this;
    }
}

