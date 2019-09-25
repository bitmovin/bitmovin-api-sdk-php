<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class FileInputStream extends InputStream
{
    /** @var string */
    public $inputId;

    /** @var string */
    public $inputPath;

    /** @var FileInputStreamType */
    public $fileType;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->fileType = ObjectMapper::map($this->fileType, FileInputStreamType::class);
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
     * Path to file (required)
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
     * fileType
     *
     * @param FileInputStreamType $fileType
     * @return $this
     */
    public function fileType(FileInputStreamType $fileType)
    {
        $this->fileType = $fileType;

        return $this;
    }
}

