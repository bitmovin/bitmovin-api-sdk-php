<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ConcatenationInputConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $inputStreamId;

    /** @var bool */
    public $isMain;

    /** @var int */
    public $position;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * The id of the input stream that should be used for concatenation. Can be either an ingest input stream, or the result of a trimming input stream
     *
     * @param string $inputStreamId
     * @return $this
     */
    public function inputStreamId(string $inputStreamId)
    {
        $this->inputStreamId = $inputStreamId;

        return $this;
    }

    /**
     * Exactly one input stream of a concatenation must have this set to true, which will be used as reference for scaling, aspect ratio, FPS, sample rate, etc.
     *
     * @param bool $isMain
     * @return $this
     */
    public function isMain(bool $isMain)
    {
        $this->isMain = $isMain;

        return $this;
    }

    /**
     * Position of the stream
     *
     * @param int $position
     * @return $this
     */
    public function position(int $position)
    {
        $this->position = $position;

        return $this;
    }
}

