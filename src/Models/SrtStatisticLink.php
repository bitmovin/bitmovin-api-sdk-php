<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SrtStatisticLink extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $bandwidth;

    /** @var float */
    public $maxBandwidth;

    /** @var float */
    public $rtt;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * bandwidth
     *
     * @param float $bandwidth
     * @return $this
     */
    public function bandwidth(float $bandwidth)
    {
        $this->bandwidth = $bandwidth;

        return $this;
    }

    /**
     * maxBandwidth
     *
     * @param float $maxBandwidth
     * @return $this
     */
    public function maxBandwidth(float $maxBandwidth)
    {
        $this->maxBandwidth = $maxBandwidth;

        return $this;
    }

    /**
     * rtt
     *
     * @param float $rtt
     * @return $this
     */
    public function rtt(float $rtt)
    {
        $this->rtt = $rtt;

        return $this;
    }
}

