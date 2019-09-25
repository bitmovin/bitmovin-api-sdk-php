<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Id3Tag extends BitmovinResource
{
    /** @var Id3TagPositionMode */
    public $positionMode;

    /** @var int */
    public $frame;

    /** @var float */
    public $time;

    public static $discriminatorMapping = [
        "RAW" => RawId3Tag::class,
        "FRAME_ID" => FrameIdId3Tag::class,
        "PLAIN_TEXT" => PlaintextId3Tag::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->positionMode = ObjectMapper::map($this->positionMode, Id3TagPositionMode::class);
    }

    /**
     * positionMode
     *
     * @param Id3TagPositionMode $positionMode
     * @return $this
     */
    public function positionMode(Id3TagPositionMode $positionMode)
    {
        $this->positionMode = $positionMode;

        return $this;
    }

    /**
     * Frame number at which the Tag should be inserted
     *
     * @param int $frame
     * @return $this
     */
    public function frame(int $frame)
    {
        $this->frame = $frame;

        return $this;
    }

    /**
     * Time in seconds where the Tag should be inserted
     *
     * @param float $time
     * @return $this
     */
    public function time(float $time)
    {
        $this->time = $time;

        return $this;
    }
}

