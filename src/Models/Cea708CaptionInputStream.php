<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Cea708CaptionInputStream extends InputStream
{
    /** @var string */
    public $inputId;

    /** @var string */
    public $inputPath;

    /** @var int */
    public $channel;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Id of the Input (required)
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
     * Path to media file (required)
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
     * The CEA-708 caption service to extract, as defined in ANSI/CTA-708-E. Service 1 is the primary caption service and is used when this value is not set. Which services a stream carries depends on the source, so check it before selecting anything other than service 1.
     *
     * @param int $channel
     * @return $this
     */
    public function channel(int $channel)
    {
        $this->channel = $channel;

        return $this;
    }
}

