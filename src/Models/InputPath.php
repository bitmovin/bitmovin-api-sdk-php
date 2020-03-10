<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InputPath extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $inputId;

    /** @var string */
    public $inputPath;

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
}

