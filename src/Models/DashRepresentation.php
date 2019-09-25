<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashRepresentation extends BitmovinResponse
{
    /** @var string */
    public $encodingId;

    /** @var string */
    public $muxingId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * UUID of an encoding (required)
     *
     * @param string $encodingId
     * @return $this
     */
    public function encodingId(string $encodingId)
    {
        $this->encodingId = $encodingId;

        return $this;
    }

    /**
     * UUID of a muxing (required)
     *
     * @param string $muxingId
     * @return $this
     */
    public function muxingId(string $muxingId)
    {
        $this->muxingId = $muxingId;

        return $this;
    }
}

