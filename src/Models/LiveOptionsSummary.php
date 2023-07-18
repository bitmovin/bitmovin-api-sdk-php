<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveOptionsSummary extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\LiveOptionsEntry */
    public $hd;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
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

