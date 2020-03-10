<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsLessThanFilter extends AnalyticsAbstractFilter
{
    /** @var object */
    public $value;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * value
     *
     * @param object $value
     * @return $this
     */
    public function value(object $value)
    {
        $this->value = $value;

        return $this;
    }
}

