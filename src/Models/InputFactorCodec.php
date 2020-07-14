<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InputFactorCodec extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
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
     * @param string $value
     * @return $this
     */
    public function value(string $value)
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

