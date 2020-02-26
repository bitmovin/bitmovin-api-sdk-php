<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Condition extends AbstractCondition
{
    /** @var string */
    public $attribute;

    /** @var ConditionOperator */
    public $operator;

    /** @var string */
    public $value;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->operator = ObjectMapper::map($this->operator, ConditionOperator::class);
    }

    /**
     * The attribute that should be used for the evaluation. Valid values include, depending on the context: - HEIGHT - WIDTH - BITRATE - FPS - ASPECTRATIO - INPUTSTREAM - LANGUAGE - CHANNELFORMAT - CHANNELLAYOUT - STREAMCOUNT - AUDIOSTREAMCOUNT - VIDEOSTREAMCOUNT - DURATION (required)
     *
     * @param string $attribute
     * @return $this
     */
    public function attribute(string $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * The operator that should be used for the evaluation (required)
     *
     * @param ConditionOperator $operator
     * @return $this
     */
    public function operator(ConditionOperator $operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * The value that should be used for comparison (required)
     *
     * @param string $value
     * @return $this
     */
    public function value(string $value)
    {
        $this->value = $value;

        return $this;
    }
}

