<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccOverview extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $total;

    /** @var float */
    public $answered;

    /** @var float */
    public $played;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Number of selected cells, one per device pool and codec/protection combination. (required)
     *
     * @param float $total
     * @return $this
     */
    public function total(float $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Selected cells with a device-answering verdict, including refusals. (required)
     *
     * @param float $answered
     * @return $this
     */
    public function answered(float $answered)
    {
        $this->answered = $answered;

        return $this;
    }

    /**
     * Selected cells that played successfully. (required)
     *
     * @param float $played
     * @return $this
     */
    public function played(float $played)
    {
        $this->played = $played;

        return $this;
    }
}

