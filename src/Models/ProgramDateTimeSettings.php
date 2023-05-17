<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ProgramDateTimeSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\ProgramDateTimeSource */
    public $programDateTimeSource;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->programDateTimeSource = ObjectMapper::map($this->programDateTimeSource, ProgramDateTimeSource::class);
    }

    /**
     * programDateTimeSource
     *
     * @param \BitmovinApiSdk\Models\ProgramDateTimeSource $programDateTimeSource
     * @return $this
     */
    public function programDateTimeSource(\BitmovinApiSdk\Models\ProgramDateTimeSource $programDateTimeSource)
    {
        $this->programDateTimeSource = $programDateTimeSource;

        return $this;
    }
}

