<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsConfigUpdateRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var object */
    public $playerStyle;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Player style config (required)
     *
     * @param object $playerStyle
     * @return $this
     */
    public function playerStyle(object $playerStyle)
    {
        $this->playerStyle = $playerStyle;

        return $this;
    }
}

