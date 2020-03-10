<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SidecarFile extends BitmovinResource
{
    /** @var string */
    public $inputId;

    /** @var string */
    public $inputPath;

    /** @var \BitmovinApiSdk\Models\EncodingOutput[] */
    public $outputs;

    /** @var \BitmovinApiSdk\Models\SidecarErrorMode */
    public $errorMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->outputs = ObjectMapper::map($this->outputs, EncodingOutput::class);
        $this->errorMode = ObjectMapper::map($this->errorMode, SidecarErrorMode::class);
    }

    /**
     * Id of input (required)
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
     * Path to sidecar file (required)
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
     * errorMode
     *
     * @param \BitmovinApiSdk\Models\SidecarErrorMode $errorMode
     * @return $this
     */
    public function errorMode(\BitmovinApiSdk\Models\SidecarErrorMode $errorMode)
    {
        $this->errorMode = $errorMode;

        return $this;
    }
}

