<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashMuxingRepresentation extends DashRepresentation
{
    /** @var string */
    public $encodingId;

    /** @var string */
    public $muxingId;

    /** @var string */
    public $dependencyId;

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

    /**
     * Used to signal a dependency with another representation. The representation may belong to a different adaptation set
     *
     * @param string $dependencyId
     * @return $this
     */
    public function dependencyId(string $dependencyId)
    {
        $this->dependencyId = $dependencyId;

        return $this;
    }
}

