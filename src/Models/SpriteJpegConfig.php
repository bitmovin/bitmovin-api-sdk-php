<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SpriteJpegConfig extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $quality;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Quality of the JPEG file in percent. Allowed values 20 - 100 (required)
     *
     * @param int $quality
     * @return $this
     */
    public function quality(int $quality)
    {
        $this->quality = $quality;

        return $this;
    }
}

