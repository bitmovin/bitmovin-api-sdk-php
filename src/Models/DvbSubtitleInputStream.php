<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DvbSubtitleInputStream extends InputStream
{
    /** @var string */
    public $inputId;

    /** @var string */
    public $inputPath;

    /** @var StreamSelectionMode */
    public $selectionMode;

    /** @var int */
    public $position;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->selectionMode = ObjectMapper::map($this->selectionMode, StreamSelectionMode::class);
    }

    /**
     * ID of an Input resource defining the input storage
     *
     * @param string $inputId
     * @return $this
     */
    public function inputId(string $inputId)
    {
        $this->inputId = $inputId;

        return $this;
    }

    /**
     * Path to an input media file
     *
     * @param string $inputPath
     * @return $this
     */
    public function inputPath(string $inputPath)
    {
        $this->inputPath = $inputPath;

        return $this;
    }

    /**
     * Specifies the strategy for selecting a stream from the input file. Supported values for VOD encodings: AUTO, POSITION_ABSOLUTE, SUBTITLE_RELATIVE. Supported values for LIVE encodings: POSITION_ABSOLUTE
     *
     * @param StreamSelectionMode $selectionMode
     * @return $this
     */
    public function selectionMode(StreamSelectionMode $selectionMode)
    {
        $this->selectionMode = $selectionMode;

        return $this;
    }

    /**
     * Position of the stream to be selected from the input file (zero-based). Must not be set in combination with selectionMode &#39;AUTO&#39;, defaults to 0 for any other selectionMode.
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

