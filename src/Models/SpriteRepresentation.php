<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SpriteRepresentation extends DashRepresentation
{
    /** @var string */
    public $encodingId;

    /** @var string */
    public $streamId;

    /** @var string */
    public $spriteId;

    /** @var string */
    public $segmentPath;

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
     * UUID of a stream (required)
     *
     * @param string $streamId
     * @return $this
     */
    public function streamId(string $streamId)
    {
        $this->streamId = $streamId;

        return $this;
    }

    /**
     * UUID of a Sprite (required)
     *
     * @param string $spriteId
     * @return $this
     */
    public function spriteId(string $spriteId)
    {
        $this->spriteId = $spriteId;

        return $this;
    }

    /**
     * Path to sprite segments. Will be used as the representation id in the manifest. (required)
     *
     * @param string $segmentPath
     * @return $this
     */
    public function segmentPath(string $segmentPath)
    {
        $this->segmentPath = $segmentPath;

        return $this;
    }
}

