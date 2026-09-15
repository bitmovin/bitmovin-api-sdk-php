<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccHdrShare extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var PccHdrConfidence */
    public $confidence;

    /** @var string */
    public $label;

    /** @var float */
    public $cells;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->confidence = ObjectMapper::map($this->confidence, PccHdrConfidence::class);
    }

    /**
     * confidence
     *
     * @param PccHdrConfidence $confidence
     * @return $this
     */
    public function confidence(PccHdrConfidence $confidence)
    {
        $this->confidence = $confidence;

        return $this;
    }

    /**
     * label
     *
     * @param string $label
     * @return $this
     */
    public function label(string $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * cells
     *
     * @param float $cells
     * @return $this
     */
    public function cells(float $cells)
    {
        $this->cells = $cells;

        return $this;
    }
}

