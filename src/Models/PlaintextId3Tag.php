<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PlaintextId3Tag extends Id3Tag
{
    /** @var string */
    public $text;

    /** @var string */
    public $frameId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Plain Text Data (required)
     *
     * @param string $text
     * @return $this
     */
    public function text(string $text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * 4 character long Frame ID (required)
     *
     * @param string $frameId
     * @return $this
     */
    public function frameId(string $frameId)
    {
        $this->frameId = $frameId;

        return $this;
    }
}

