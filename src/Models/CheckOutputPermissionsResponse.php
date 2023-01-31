<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CheckOutputPermissionsResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $outputId;

    /** @var OutputType */
    public $outputType;

    /** @var string */
    public $path;

    /** @var bool */
    public $passed;

    /** @var string */
    public $failureReason;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->outputType = ObjectMapper::map($this->outputType, OutputType::class);
    }
}

