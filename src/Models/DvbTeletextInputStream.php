<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DvbTeletextInputStream extends InputStream
{
    /** @var string */
    public $inputId;

    /** @var string */
    public $inputPath;

    /** @var StreamSelectionMode */
    public $selectionMode;

    /** @var int */
    public $position;

    /** @var int */
    public $page;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->selectionMode = ObjectMapper::map($this->selectionMode, StreamSelectionMode::class);
    }

    /**
     * Id of input
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
     * Path to media file
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
     * Specifies the algorithm how the stream in the input file will be selected
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
     * Page number of the subtitles
     *
     * @param int $page
     * @return $this
     */
    public function page(int $page)
    {
        $this->page = $page;

        return $this;
    }
}

