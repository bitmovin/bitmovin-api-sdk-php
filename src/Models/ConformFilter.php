<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ConformFilter extends Filter
{
    /** @var float */
    public $targetFps;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * The FPS the input should be changed to.
     *
     * @param float $targetFps
     * @return $this
     */
    public function targetFps(float $targetFps)
    {
        $this->targetFps = $targetFps;

        return $this;
    }
}

