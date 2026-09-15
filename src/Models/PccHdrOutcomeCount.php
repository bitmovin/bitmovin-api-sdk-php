<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccHdrOutcomeCount extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var PccHdrOutcome */
    public $outcome;

    /** @var PccHdrConfidence */
    public $confidence;

    /** @var string */
    public $label;

    /** @var float */
    public $cells;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->outcome = ObjectMapper::map($this->outcome, PccHdrOutcome::class);
        $this->confidence = ObjectMapper::map($this->confidence, PccHdrConfidence::class);
    }

    /**
     * outcome
     *
     * @param PccHdrOutcome $outcome
     * @return $this
     */
    public function outcome(PccHdrOutcome $outcome)
    {
        $this->outcome = $outcome;

        return $this;
    }

    /**
     * Null only for unreported readings. Evidence includes both HDR and SDR outcomes. (required)
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
     * Selected HDR playback passes with this outcome. All six outcomes sum to HDR passes. (required)
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

