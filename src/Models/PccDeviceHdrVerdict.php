<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccDeviceHdrVerdict extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $mark;

    /** @var string */
    public $label;

    /** @var PccHdrConfidence */
    public $confidence;

    /** @var bool */
    public $actionable;

    /** @var float */
    public $passes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->confidence = ObjectMapper::map($this->confidence, PccHdrConfidence::class);
    }

    /**
     * mark
     *
     * @param string $mark
     * @return $this
     */
    public function mark(string $mark)
    {
        $this->mark = $mark;

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
     * actionable
     *
     * @param bool $actionable
     * @return $this
     */
    public function actionable(bool $actionable)
    {
        $this->actionable = $actionable;

        return $this;
    }

    /**
     * HDR passes supporting this verdict, not all passes for the device. (required)
     *
     * @param float $passes
     * @return $this
     */
    public function passes(float $passes)
    {
        $this->passes = $passes;

        return $this;
    }
}

