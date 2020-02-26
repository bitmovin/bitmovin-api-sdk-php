<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StatisticsPerLabel extends Statistics
{
    /** @var string */
    public $label;

    /** @var float */
    public $billableMinutes;

    /** @var \BitmovinApiSdk\Models\BillableEncodingMinutes[] */
    public $billableEncodingMinutes;

    /** @var float */
    public $billableTransmuxingMinutes;

    /** @var \BitmovinApiSdk\Models\BillableEncodingFeatureMinutes[] */
    public $billableFeatureMinutes;

    /** @var \BitmovinApiSdk\Models\EgressInformation[] */
    public $billableEgressBytes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->billableEncodingMinutes = ObjectMapper::map($this->billableEncodingMinutes, BillableEncodingMinutes::class);
        $this->billableFeatureMinutes = ObjectMapper::map($this->billableFeatureMinutes, BillableEncodingFeatureMinutes::class);
        $this->billableEgressBytes = ObjectMapper::map($this->billableEgressBytes, EgressInformation::class);
    }

    /**
     * An optional error message, when the event is in error state (occurs at event: ERROR) (required)
     *
     * @param string $label
     * @return $this
     */
    public function label(string $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * The billable minutes.
     *
     * @param float $billableMinutes
     * @return $this
     */
    public function billableMinutes(float $billableMinutes)
    {
        $this->billableMinutes = $billableMinutes;

        return $this;
    }

    /**
     * Billable minutes for muxings.
     *
     * @param float $billableTransmuxingMinutes
     * @return $this
     */
    public function billableTransmuxingMinutes(float $billableTransmuxingMinutes)
    {
        $this->billableTransmuxingMinutes = $billableTransmuxingMinutes;

        return $this;
    }
}

