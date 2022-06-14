<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobDirectFileUploadInput extends SimpleEncodingVodJobInput
{
    /** @var string */
    public $inputId;

    /** @var SimpleEncodingVodJobInputType */
    public $inputType;

    /** @var string */
    public $language;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->inputType = ObjectMapper::map($this->inputType, SimpleEncodingVodJobInputType::class);
    }

    /**
     * Id of a DirectFileUploadInput (required)
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
     * Defines the type of the input file, if no type is set it is assumed that the input file contains at least one video stream and optionally one or multiple audio streams.  Note that when defining video and audio inputs, you can either - add one single input without inputType, in which case that source file must contain a video stream and (if you want audio) one audio stream, or - add one single input with inputType&#x3D;VIDEO and (if you want audio) one or more inputs with inputType&#x3D;AUDIO (each containing one audio stream)  Other combinations are not valid.
     *
     * @param SimpleEncodingVodJobInputType $inputType
     * @return $this
     */
    public function inputType(SimpleEncodingVodJobInputType $inputType)
    {
        $this->inputType = $inputType;

        return $this;
    }

    /**
     * The language of the audio track, the subtitles, or closed captions file. The language code  must be compliant with [BCP 47](https://datatracker.ietf.org/doc/html/rfc5646).  This property is mandatory if the input provided is of type SUBTITLES or CLOSED_CAPTIONS and  recommended for input type AUDIO and an input that does not specify an input type (combined  audio and video). If an audio input does not specify the language, it is defaulted to &#x60;und&#x60;  (undefined).
     *
     * @param string $language
     * @return $this
     */
    public function language(string $language)
    {
        $this->language = $language;

        return $this;
    }
}

