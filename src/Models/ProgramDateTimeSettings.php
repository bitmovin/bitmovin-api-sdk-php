<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ProgramDateTimeSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\ProgramDateTimeSource */
    public $programDateTimeSource;

    /** @var \BitmovinApiSdk\Models\ProgramDateTimePlacement */
    public $programDateTimePlacement;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->programDateTimeSource = ObjectMapper::map($this->programDateTimeSource, ProgramDateTimeSource::class);
        $this->programDateTimePlacement = ObjectMapper::map($this->programDateTimePlacement, ProgramDateTimePlacement::class);
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

    /**
     * programDateTimePlacement
     *
     * @param \BitmovinApiSdk\Models\ProgramDateTimePlacement $programDateTimePlacement
     * @return $this
     */
    public function programDateTimePlacement(\BitmovinApiSdk\Models\ProgramDateTimePlacement $programDateTimePlacement)
    {
        $this->programDateTimePlacement = $programDateTimePlacement;

        return $this;
    }
}

