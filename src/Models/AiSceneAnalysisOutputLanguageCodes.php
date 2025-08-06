<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisOutputLanguageCodes extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string[] */
    public $outputLanguageCodes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * outputLanguageCodes
     *
     * @param string[] $outputLanguageCodes
     * @return $this
     */
    public function outputLanguageCodes(array $outputLanguageCodes)
    {
        $this->outputLanguageCodes = $outputLanguageCodes;

        return $this;
    }
}

