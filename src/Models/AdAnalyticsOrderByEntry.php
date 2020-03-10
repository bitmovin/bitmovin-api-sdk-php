<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AdAnalyticsOrderByEntry extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\AdAnalyticsAttribute */
    public $name;

    /** @var \BitmovinApiSdk\Models\AnalyticsOrder */
    public $order;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->name = ObjectMapper::map($this->name, AdAnalyticsAttribute::class);
        $this->order = ObjectMapper::map($this->order, AnalyticsOrder::class);
    }

    /**
     * name
     *
     * @param \BitmovinApiSdk\Models\AdAnalyticsAttribute $name
     * @return $this
     */
    public function name(\BitmovinApiSdk\Models\AdAnalyticsAttribute $name)
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

