<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InputFactorBitrate extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $value;

    /** @var float */
    public $factor;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * value
     *
     * @param int $value
     * @return $this
     */
    public function value(int $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * factor
     *
     * @param float $factor
     * @return $this
     */
    public function factor(float $factor)
    {
        $this->factor = $factor;

        return $this;
    }
}

