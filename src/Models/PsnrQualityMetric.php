<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PsnrQualityMetric extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\TimeSpan */
    public $timeSpan;

    /** @var float */
    public $psnr;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->timeSpan = ObjectMapper::map($this->timeSpan, TimeSpan::class);
    }

    /**
     * timeSpan
     *
     * @param \BitmovinApiSdk\Models\TimeSpan $timeSpan
     * @return $this
     */
    public function timeSpan(\BitmovinApiSdk\Models\TimeSpan $timeSpan)
    {
        $this->timeSpan = $timeSpan;

        return $this;
    }

    /**
     * Peak signal-to-noise ratio (required)
     *
     * @param float $psnr
     * @return $this
     */
    public function psnr(float $psnr)
    {
        $this->psnr = $psnr;

        return $this;
    }
}

