<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SrtToCea608708Caption extends BitmovinResource
{
    /** @var InputPath */
    public $input;

    /** @var Cea608ChannelType */
    public $ccChannel;

    /** @var CaptionCharacterEncoding */
    public $characterEncoding;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->input = ObjectMapper::map($this->input, InputPath::class);
        $this->ccChannel = ObjectMapper::map($this->ccChannel, Cea608ChannelType::class);
        $this->characterEncoding = ObjectMapper::map($this->characterEncoding, CaptionCharacterEncoding::class);
    }

    /**
     * Input location of the SRT file (required)
     *
     * @param InputPath $input
     * @return $this
     */
    public function input(InputPath $input)
    {
        $this->input = $input;

        return $this;
    }

    /**
     * The channel number to embed the CEA subtitles in (required)
     *
     * @param Cea608ChannelType $ccChannel
     * @return $this
     */
    public function ccChannel(Cea608ChannelType $ccChannel)
    {
        $this->ccChannel = $ccChannel;

        return $this;
    }

    /**
     * Character encoding of the input SRT file (required)
     *
     * @param CaptionCharacterEncoding $characterEncoding
     * @return $this
     */
    public function characterEncoding(CaptionCharacterEncoding $characterEncoding)
    {
        $this->characterEncoding = $characterEncoding;

        return $this;
    }
}

