<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsOrderByEntry extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\AnalyticsAttribute */
    public $name;

    /** @var \BitmovinApiSdk\Models\AnalyticsOrder */
    public $order;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->name = ObjectMapper::map($this->name, AnalyticsAttribute::class);
        $this->order = ObjectMapper::map($this->order, AnalyticsOrder::class);
    }

    /**
     * name
     *
     * @param \BitmovinApiSdk\Models\AnalyticsAttribute $name
     * @return $this
     */
    public function name(\BitmovinApiSdk\Models\AnalyticsAttribute $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * order
     *
     * @param \BitmovinApiSdk\Models\AnalyticsOrder $order
     * @return $this
     */
    public function order(\BitmovinApiSdk\Models\AnalyticsOrder $order)
    {
        $this->order = $order;

        return $this;
    }
}

