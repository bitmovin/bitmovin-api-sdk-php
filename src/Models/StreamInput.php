<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamInput extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $inputId;

    /** @var string */
    public $inputPath;

    /** @var StreamSelectionMode */
    public $selectionMode;

    /** @var int */
    public $position;

    /** @var string */
    public $inputStreamId;

    /** @var EncodingStreamInputDetails */
    public $analysisDetails;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->selectionMode = ObjectMapper::map($this->selectionMode, StreamSelectionMode::class);
        $this->analysisDetails = ObjectMapper::map($this->analysisDetails, EncodingStreamInputDetails::class);
    }

    /**
     * ID of an Input resource defining the input storage. Required if &#39;inputStreamId&#39; is not set.
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
     * Path to an input media file. Required if &#39;inputStreamId&#39; is not set.
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
     * Specifies the strategy for selecting a stream from the input file. Must not be set when &#39;inputStreamId&#39; is set.
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

    /**
     * Set this property instead of all others to reference an InputStream resource (e.g. an Ingest-, Trimming- or ConcatenationInputStream)
     *
     * @param string $inputStreamId
     * @return $this
     */
    public function inputStreamId(string $inputStreamId)
    {
        $this->inputStreamId = $inputStreamId;

        return $this;
    }
}

