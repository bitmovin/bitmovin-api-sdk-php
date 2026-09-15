<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccPicture extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $mark;

    /** @var PccHdrConfidence */
    public $confidence;

    /** @var bool */
    public $actionable;

    /** @var string */
    public $sentence;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->confidence = ObjectMapper::map($this->confidence, PccHdrConfidence::class);
    }

    /**
     * The mark the cell wears. &#x60;hdrLegend&#x60; explains it. (required)
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
     * Whether this is a result somebody should chase, which is not how confident it is. (required)
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
     * sentence
     *
     * @param string $sentence
     * @return $this
     */
    public function sentence(string $sentence)
    {
        $this->sentence = $sentence;

        return $this;
    }
}

