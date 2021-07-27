<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EnhancedDeinterlaceFilter extends Filter
{
    /** @var EnhancedDeinterlaceParity */
    public $parity;

    /** @var EnhancedDeinterlaceMode */
    public $mode;

    /** @var EnhancedDeinterlaceAutoEnable */
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
     * @param EnhancedDeinterlaceParity $parity
     * @return $this
     */
    public function parity(EnhancedDeinterlaceParity $parity)
    {
        $this->parity = $parity;

        return $this;
    }

    /**
     * mode
     *
     * @param EnhancedDeinterlaceMode $mode
     * @return $this
     */
    public function mode(EnhancedDeinterlaceMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * autoEnable
     *
     * @param EnhancedDeinterlaceAutoEnable $autoEnable
     * @return $this
     */
    public function autoEnable(EnhancedDeinterlaceAutoEnable $autoEnable)
    {
        $this->autoEnable = $autoEnable;

        return $this;
    }
}

