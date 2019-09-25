<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ConvertSccCaption extends BitmovinResource
{
    /** @var InputPath */
    public $input;

    /** @var \BitmovinApiSdk\Models\EncodingOutput[] */
    public $outputs;

    /** @var string */
    public $fileName;

    /** @var StreamCaptionOutputFormat */
    public $outputFormat;

    /** @var ConvertSccCaptionWebVttSettings */
    public $webVttSettings;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->input = ObjectMapper::map($this->input, InputPath::class);
        $this->outputs = ObjectMapper::map($this->outputs, EncodingOutput::class);
        $this->outputFormat = ObjectMapper::map($this->outputFormat, StreamCaptionOutputFormat::class);
        $this->webVttSettings = ObjectMapper::map($this->webVttSettings, ConvertSccCaptionWebVttSettings::class);
    }

    /**
     * The input location to get the scc file from (required)
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
     * outputs
     *
     * @param \BitmovinApiSdk\Models\EncodingOutput[] $outputs
     * @return $this
     */
    public function outputs(array $outputs)
    {
        $this->outputs = $outputs;

        return $this;
    }

    /**
     * Name of the captions file (required)
     *
     * @param string $fileName
     * @return $this
     */
    public function fileName(string $fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * outputFormat
     *
     * @param StreamCaptionOutputFormat $outputFormat
     * @return $this
     */
    public function outputFormat(StreamCaptionOutputFormat $outputFormat)
    {
        $this->outputFormat = $outputFormat;

        return $this;
    }

    /**
     * Optional settings when converting SCC to WebVTT
     *
     * @param ConvertSccCaptionWebVttSettings $webVttSettings
     * @return $this
     */
    public function webVttSettings(ConvertSccCaptionWebVttSettings $webVttSettings)
    {
        $this->webVttSettings = $webVttSettings;

        return $this;
    }
}

