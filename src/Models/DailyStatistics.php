<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DailyStatistics extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $date;

    /** @var int */
    public $bytesEncoded;

    /** @var int */
    public $timeEncoded;

    /** @var float */
    public $billableMinutes;

    /** @var string */
    public $label;

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
        $this->date = ObjectMapper::map($this->date, Carbon::class);
        $this->billableEncodingMinutes = ObjectMapper::map($this->billableEncodingMinutes, BillableEncodingMinutes::class);
        $this->billableFeatureMinutes = ObjectMapper::map($this->billableFeatureMinutes, BillableEncodingFeatureMinutes::class);
        $this->billableEgressBytes = ObjectMapper::map($this->billableEgressBytes, EgressInformation::class);
    }

    /**
     * Date for the shown data. Format: yyyy-MM-dd (required)
     *
     * @param Carbon $date
     * @return $this
     */
    public function date(Carbon $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Bytes encoded. (required)
     *
     * @param int $bytesEncoded
     * @return $this
     */
    public function bytesEncoded(int $bytesEncoded)
    {
        $this->bytesEncoded = $bytesEncoded;

        return $this;
    }

    /**
     * Time in seconds encoded for this day. (required)
     *
     * @param int $timeEncoded
     * @return $this
     */
    public function timeEncoded(int $timeEncoded)
    {
        $this->timeEncoded = $timeEncoded;

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
     * Label identifier.
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

