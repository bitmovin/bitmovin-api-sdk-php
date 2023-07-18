<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveOptionsBreakdownEntry extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $date;

    /** @var \BitmovinApiSdk\Models\LiveOptionsEntry */
    public $hd;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->date = ObjectMapper::map($this->date, Carbon::class);
        $this->hd = ObjectMapper::map($this->hd, LiveOptionsEntry::class);
    }

    /**
     * hd
     *
     * @param \BitmovinApiSdk\Models\LiveOptionsEntry $hd
     * @return $this
     */
    public function hd(\BitmovinApiSdk\Models\LiveOptionsEntry $hd)
    {
        $this->hd = $hd;

        return $this;
    }
}

