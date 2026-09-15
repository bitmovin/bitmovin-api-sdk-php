<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccHdrLegendEntry extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $mark;

    /** @var string */
    public $label;

    /** @var PccHdrConfidence */
    public $confidence;

    /** @var string */
    public $sentence;

    /** @var bool */
    public $actionable;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->confidence = ObjectMapper::map($this->confidence, PccHdrConfidence::class);
    }

    /**
     * The mark an HDR result wears on the cell. (required)
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
     * The reader&#39;s word for it — &#x60;The frames really were HDR&#x60;, &#x60;The device claims HDR&#x60;, and so on. (required)
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
     * Which instrument established the picture, where anything did. (required)
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
     * What that mark establishes, and what it does not. (required)
     *
     * @param string $sentence
     * @return $this
     */
    public function sentence(string $sentence)
    {
        $this->sentence = $sentence;

        return $this;
    }

    /**
     * Whether a result wearing this mark is one somebody should chase, which is not the same as how confident it is. (required)
     *
     * @param bool $actionable
     * @return $this
     */
    public function actionable(bool $actionable)
    {
        $this->actionable = $actionable;

        return $this;
    }
}

