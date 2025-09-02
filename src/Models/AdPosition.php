<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AdPosition extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $position;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * position
     *
     * @param float $position
     * @return $this
     */
    public function position(float $position)
    {
        $this->position = $position;

        return $this;
    }
}

