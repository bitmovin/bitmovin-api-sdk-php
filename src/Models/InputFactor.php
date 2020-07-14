<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InputFactor extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\InputFactorCodec */
    public $codec;

    /** @var \BitmovinApiSdk\Models\InputFactorBitrate */
    public $bitrate;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->codec = ObjectMapper::map($this->codec, InputFactorCodec::class);
        $this->bitrate = ObjectMapper::map($this->bitrate, InputFactorBitrate::class);
    }

    /**
     * codec
     *
     * @param \BitmovinApiSdk\Models\InputFactorCodec $codec
     * @return $this
     */
    public function codec(\BitmovinApiSdk\Models\InputFactorCodec $codec)
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * bitrate
     *
     * @param \BitmovinApiSdk\Models\InputFactorBitrate $bitrate
     * @return $this
     */
    public function bitrate(\BitmovinApiSdk\Models\InputFactorBitrate $bitrate)
    {
        $this->bitrate = $bitrate;

        return $this;
    }
}

