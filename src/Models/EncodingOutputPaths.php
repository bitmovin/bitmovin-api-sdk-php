<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingOutputPaths extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Output */
    public $output;

    /** @var EncodingOutputPathsForOutput */
    public $paths;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->output = ObjectMapper::map($this->output, Output::class);
        $this->paths = ObjectMapper::map($this->paths, EncodingOutputPathsForOutput::class);
    }

    /**
     * output
     *
     * @param Output $output
     * @return $this
     */
    public function output(Output $output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * paths
     *
     * @param EncodingOutputPathsForOutput $paths
     * @return $this
     */
    public function paths(EncodingOutputPathsForOutput $paths)
    {
        $this->paths = $paths;

        return $this;
    }
}

