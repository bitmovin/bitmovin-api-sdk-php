<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Cea608CaptionInputStream extends InputStream
{
    /** @var string */
    public $inputId;

    /** @var string */
    public $inputPath;

    /** @var Cea608ChannelType */
    public $channel;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->channel = ObjectMapper::map($this->channel, Cea608ChannelType::class);
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
     * The CEA-608 caption channel to extract, as defined in ANSI/CTA-608-E. Only the primary channel of each field is selectable: CC1 on field 1 and CC3 on field 2. (required)
     *
     * @param Cea608ChannelType $channel
     * @return $this
     */
    public function channel(Cea608ChannelType $channel)
    {
        $this->channel = $channel;

        return $this;
    }
}

