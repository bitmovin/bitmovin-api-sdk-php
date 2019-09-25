<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DeinterlaceFilter extends Filter
{
    /** @var \BitmovinApiSdk\Models\PictureFieldParity */
    public $parity;

    /** @var \BitmovinApiSdk\Models\DeinterlaceMode */
    public $mode;

    /** @var \BitmovinApiSdk\Models\DeinterlaceFrameSelectionMode */
    public $frameSelectionMode;

    /** @var \BitmovinApiSdk\Models\DeinterlaceAutoEnable */
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
     * @param \BitmovinApiSdk\Models\PictureFieldParity $parity
     * @return $this
     */
    public function parity(\BitmovinApiSdk\Models\PictureFieldParity $parity)
    {
        $this->parity = $parity;

        return $this;
    }

    /**
     * mode
     *
     * @param \BitmovinApiSdk\Models\DeinterlaceMode $mode
     * @return $this
     */
    public function mode(\BitmovinApiSdk\Models\DeinterlaceMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * frameSelectionMode
     *
     * @param \BitmovinApiSdk\Models\DeinterlaceFrameSelectionMode $frameSelectionMode
     * @return $this
     */
    public function frameSelectionMode(\BitmovinApiSdk\Models\DeinterlaceFrameSelectionMode $frameSelectionMode)
    {
        $this->frameSelectionMode = $frameSelectionMode;

        return $this;
    }

    /**
     * autoEnable
     *
     * @param \BitmovinApiSdk\Models\DeinterlaceAutoEnable $autoEnable
     * @return $this
     */
    public function autoEnable(\BitmovinApiSdk\Models\DeinterlaceAutoEnable $autoEnable)
    {
        $this->autoEnable = $autoEnable;

        return $this;
    }
}

