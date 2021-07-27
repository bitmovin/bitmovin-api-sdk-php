<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DeinterlaceFilter extends Filter
{
    /** @var PictureFieldParity */
    public $parity;

    /** @var DeinterlaceMode */
    public $mode;

    /** @var DeinterlaceFrameSelectionMode */
    public $frameSelectionMode;

    /** @var DeinterlaceAutoEnable */
    public $autoEnable;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->parity = ObjectMapper::map($this->parity, PictureFieldParity::class);
        $this->mode = ObjectMapper::map($this->mode, DeinterlaceMode::class);
        $this->frameSelectionMode = ObjectMapper::map($this->frameSelectionMode, DeinterlaceFrameSelectionMode::class);
        $this->autoEnable = ObjectMapper::map($this->autoEnable, DeinterlaceAutoEnable::class);
    }

    /**
     * parity
     *
     * @param PictureFieldParity $parity
     * @return $this
     */
    public function parity(PictureFieldParity $parity)
    {
        $this->parity = $parity;

        return $this;
    }

    /**
     * mode
     *
     * @param DeinterlaceMode $mode
     * @return $this
     */
    public function mode(DeinterlaceMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * frameSelectionMode
     *
     * @param DeinterlaceFrameSelectionMode $frameSelectionMode
     * @return $this
     */
    public function frameSelectionMode(DeinterlaceFrameSelectionMode $frameSelectionMode)
    {
        $this->frameSelectionMode = $frameSelectionMode;

        return $this;
    }

    /**
     * autoEnable
     *
     * @param DeinterlaceAutoEnable $autoEnable
     * @return $this
     */
    public function autoEnable(DeinterlaceAutoEnable $autoEnable)
    {
        $this->autoEnable = $autoEnable;

        return $this;
    }
}

