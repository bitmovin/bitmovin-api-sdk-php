<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyVisionInputStream extends InputStream
{
    /** @var string */
    public $inputId;

    /** @var string */
    public $videoInputPath;

    /** @var string */
    public $metadataInputPath;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
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
     * Path to Dolby Vision input video file. (required)
     *
     * @param string $videoInputPath
     * @return $this
     */
    public function videoInputPath(string $videoInputPath)
    {
        $this->videoInputPath = $videoInputPath;

        return $this;
    }

    /**
     * Path to Dolby Vision Metadata file. This field is required when the metadata is not embedded in the video input file.
     *
     * @param string $metadataInputPath
     * @return $this
     */
    public function metadataInputPath(string $metadataInputPath)
    {
        $this->metadataInputPath = $metadataInputPath;

        return $this;
    }
}

