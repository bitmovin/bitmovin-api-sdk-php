<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ProgressiveMovMuxing extends Muxing
{
    /** @var string */
    public $filename;

    /** @var InternalChunkLength */
    public $internalChunkLength;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->internalChunkLength = ObjectMapper::map($this->internalChunkLength, InternalChunkLength::class);
    }

    /**
     * The output file name
     *
     * @param string $filename
     * @return $this
     */
    public function filename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Modifies the internal chunk length used for chunked encoding
     *
     * @param InternalChunkLength $internalChunkLength
     * @return $this
     */
    public function internalChunkLength(InternalChunkLength $internalChunkLength)
    {
        $this->internalChunkLength = $internalChunkLength;

        return $this;
    }
}

