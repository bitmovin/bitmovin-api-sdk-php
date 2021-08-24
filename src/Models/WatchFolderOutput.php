<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WatchFolderOutput extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $outputId;

    /** @var string */
    public $outputPath;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Id of the corresponding output (required)
     *
     * @param string $outputId
     * @return $this
     */
    public function outputId(string $outputId)
    {
        $this->outputId = $outputId;

        return $this;
    }

    /**
     * Subdirectory where to save the files to (required)
     *
     * @param string $outputPath
     * @return $this
     */
    public function outputPath(string $outputPath)
    {
        $this->outputPath = $outputPath;

        return $this;
    }
}

