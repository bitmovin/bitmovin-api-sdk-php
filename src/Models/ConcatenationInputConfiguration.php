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

    /** @var PaddingSequence */
    public $paddingBefore;

    /** @var PaddingSequence */
    public $paddingAfter;

    /** @var AspectMode */
    public $aspectMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->paddingBefore = ObjectMapper::map($this->paddingBefore, PaddingSequence::class);
        $this->paddingAfter = ObjectMapper::map($this->paddingAfter, PaddingSequence::class);
        $this->aspectMode = ObjectMapper::map($this->aspectMode, AspectMode::class);
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

    /**
     * Inserts a padding sequence (black frames and/or silent audio) before the input stream. If this is set, all video output streams of the encoding need to use the same ConcatenationInputStream.
     *
     * @param PaddingSequence $paddingBefore
     * @return $this
     */
    public function paddingBefore(PaddingSequence $paddingBefore)
    {
        $this->paddingBefore = $paddingBefore;

        return $this;
    }

    /**
     * Inserts a padding sequence (black frames and/or silent audio) after the input stream. If this is set, all video output streams of the encoding need to use the same ConcatenationInputStream.
     *
     * @param PaddingSequence $paddingAfter
     * @return $this
     */
    public function paddingAfter(PaddingSequence $paddingAfter)
    {
        $this->paddingAfter = $paddingAfter;

        return $this;
    }

    /**
     * Specifies the aspect mode that is used when adapting to the main input stream&#39;s aspect ratio
     *
     * @param AspectMode $aspectMode
     * @return $this
     */
    public function aspectMode(AspectMode $aspectMode)
    {
        $this->aspectMode = $aspectMode;

        return $this;
    }
}

