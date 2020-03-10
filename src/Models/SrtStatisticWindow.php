<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SrtStatisticWindow extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $congestion;

    /** @var int */
    public $flight;

    /** @var int */
    public $flow;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * congestion
     *
     * @param int $congestion
     * @return $this
     */
    public function congestion(int $congestion)
    {
        $this->congestion = $congestion;

        return $this;
    }

    /**
     * flight
     *
     * @param int $flight
     * @return $this
     */
    public function flight(int $flight)
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * flow
     *
     * @param int $flow
     * @return $this
     */
    public function flow(int $flow)
    {
        $this->flow = $flow;

        return $this;
    }
}

