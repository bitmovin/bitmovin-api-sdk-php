<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingStats extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $date;

    /** @var string */
    public $encodingId;

    /** @var int */
    public $bytesEncoded;

    /** @var int */
    public $timeEncoded;

    /** @var int */
    public $downloadedSize;

    /** @var float */
    public $billableMinutes;

    /** @var \BitmovinApiSdk\Models\BillableEncodingMinutes[] */
    public $billableEncodingMinutes;

    /** @var float */
    public $billableTransmuxingMinutes;

    /** @var float */
    public $billableFeatureMinutes;

    /** @var \BitmovinApiSdk\Models\StatisticsPerStream[] */
    public $streams;

    /** @var \BitmovinApiSdk\Models\StatisticsPerMuxing[] */
    public $muxings;

    /** @var \BitmovinApiSdk\Models\BillableEncodingFeatureMinutes[] */
    public $features;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->date = ObjectMapper::map($this->date, Carbon::class);
        $this->billableEncodingMinutes = ObjectMapper::map($this->billableEncodingMinutes, BillableEncodingMinutes::class);
        $this->streams = ObjectMapper::map($this->streams, StatisticsPerStream::class);
        $this->muxings = ObjectMapper::map($this->muxings, StatisticsPerMuxing::class);
        $this->features = ObjectMapper::map($this->features, BillableEncodingFeatureMinutes::class);
    }

    /**
     * Date, format. yyyy-MM-dd
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
     * The id of the encoding (required)
     *
     * @param string $encodingId
     * @return $this
     */
    public function encodingId(string $encodingId)
    {
        $this->encodingId = $encodingId;

        return $this;
    }

    /**
     * Total bytes encoded
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
     * Total time encoded
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
     * Downloaded size of the input file
     *
     * @param int $downloadedSize
     * @return $this
     */
    public function downloadedSize(int $downloadedSize)
    {
        $this->downloadedSize = $downloadedSize;

        return $this;
    }

    /**
     * Billable minutes
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
     * Detailed statistics per stream
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
     * Billable transmuxing minutes (required)
     *
     * @param float $billableTransmuxingMinutes
     * @return $this
     */
    public function billableTransmuxingMinutes(float $billableTransmuxingMinutes)
    {
        $this->billableTransmuxingMinutes = $billableTransmuxingMinutes;

        return $this;
    }

    /**
     * Billable feature minutes
     *
     * @param float $billableFeatureMinutes
     * @return $this
     */
    public function billableFeatureMinutes(float $billableFeatureMinutes)
    {
        $this->billableFeatureMinutes = $billableFeatureMinutes;

        return $this;
    }

    /**
     * Detailed statistics per stream (required)
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
     * Detailed statistics per muxing (required)
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
     * Detailed statistics per feature
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

