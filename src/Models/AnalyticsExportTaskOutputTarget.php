<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsExportTaskOutputTarget extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $outputPath;

    /** @var string */
    public $outputId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Path where the export should be saved (required)
     *
     * @param string $outputPath
     * @return $this
     */
    public function outputPath(string $outputPath)
    {
        $this->outputPath = $outputPath;

        return $this;
    }

    /**
     * Id of the output that should be used (required)
     *
     * @param string $outputId
     * @return $this
     */
    public function outputId(string $outputId)
    {
        $this->outputId = $outputId;

        return $this;
    }
}

