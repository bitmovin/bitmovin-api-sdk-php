<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyAtmosIngestInputStream extends InputStream
{
    /** @var string */
    public $inputId;

    /** @var string */
    public $inputPath;

    /** @var DolbyAtmosInputFormat */
    public $inputFormat;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->inputFormat = ObjectMapper::map($this->inputFormat, DolbyAtmosInputFormat::class);
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
     * Path to the Dolby Atmos input file (required)
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
     * Input file format of the Dolby Atmos input file.  Set it to DAMF if the given input file is a Dolby Atmos Master File (.atmos). Set it to ADM if the given input file is an Audio Definition Model Broadcast Wave Format file (.wav) (required)
     *
     * @param DolbyAtmosInputFormat $inputFormat
     * @return $this
     */
    public function inputFormat(DolbyAtmosInputFormat $inputFormat)
    {
        $this->inputFormat = $inputFormat;

        return $this;
    }
}

