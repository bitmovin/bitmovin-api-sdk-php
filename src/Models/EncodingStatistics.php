<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingStatistics extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $date;

    /** @var int */
    public $bytesEncoded;

    /** @var int */
    public $timeEncoded;

    /** @var int */
    public $bytesEgress;

    /** @var \BitmovinApiSdk\Models\BillableEncodingMinutes[] */
    public $billableEncodingMinutes;

    /** @var \BitmovinApiSdk\Models\EgressInformation[] */
    public $billableEgressBytes;

    /** @var \BitmovinApiSdk\Models\StatisticsPerStream[] */
    public $streams;

    /** @var \BitmovinApiSdk\Models\StatisticsPerMuxing[] */
    public $muxings;

    /** @var \BitmovinApiSdk\Models\BillableEncodingFeatureMinutes[] */
    public $features;

    /** @var float */
    public $billableTransmuxingMinutes;

    /** @var float */
    public $billableFeatureMinutes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->date = ObjectMapper::map($this->date, Carbon::class);
        $this->billableEncodingMinutes = ObjectMapper::map($this->billableEncodingMinutes, BillableEncodingMinutes::class);
        $this->billableEgressBytes = ObjectMapper::map($this->billableEgressBytes, EgressInformation::class);
        $this->streams = ObjectMapper::map($this->streams, StatisticsPerStream::class);
        $this->muxings = ObjectMapper::map($this->muxings, StatisticsPerMuxing::class);
        $this->features = ObjectMapper::map($this->features, BillableEncodingFeatureMinutes::class);
    }

    /**
     * billableEncodingMinutes
     *
     * @param \BitmovinApiSdk\Models\BillableEncodingMinutes[] $billableEncodingMinutes
     * @return $this
     */
    public function billableEncodingMinutes(array $billableEncodingMinutes)
    {
        $this->billableEncodingMinutes = $billableEncodingMinutes;

        return $this;
    }

    /**
     * billableEgressBytes
     *
     * @param \BitmovinApiSdk\Models\EgressInformation[] $billableEgressBytes
     * @return $this
     */
    public function billableEgressBytes(array $billableEgressBytes)
    {
        $this->billableEgressBytes = $billableEgressBytes;

        return $this;
    }

    /**
     * streams
     *
     * @param \BitmovinApiSdk\Models\StatisticsPerStream[] $streams
     * @return $this
     */
    public function streams(array $streams)
    {
        $this->streams = $streams;

        return $this;
    }

    /**
     * muxings
     *
     * @param \BitmovinApiSdk\Models\StatisticsPerMuxing[] $muxings
     * @return $this
     */
    public function muxings(array $muxings)
    {
        $this->muxings = $muxings;

        return $this;
    }

    /**
     * features
     *
     * @param \BitmovinApiSdk\Models\BillableEncodingFeatureMinutes[] $features
     * @return $this
     */
    public function features(array $features)
    {
        $this->features = $features;

        return $this;
    }
}

