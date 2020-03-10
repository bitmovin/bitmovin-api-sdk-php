<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SubtitlesMediaInfo extends StandardMediaInfo
{
    /** @var bool */
    public $forced;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * A value of true indicates that the Rendition contains content which is considered essential to play.
     *
     * @param bool $forced
     * @return $this
     */
    public function forced(bool $forced)
    {
        $this->forced = $forced;

        return $this;
    }
}

