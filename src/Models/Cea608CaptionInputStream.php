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
     * The channel number of the subtitle on the respective stream position (required)
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

