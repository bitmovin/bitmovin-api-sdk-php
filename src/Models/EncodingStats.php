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

    /** @var \BitmovinApiSdk\Models\EgressInformation[] */
    public $billableEgressBytes;

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
        $this->billableEgressBytes = ObjectMapper::map($this->billableEgressBytes, EgressInformation::class);
        $this->billableEncodingMinutes = ObjectMapper::map($this->billableEncodingMinutes, BillableEncodingMinutes::class);
        $this->streams = ObjectMapper::map($this->streams, StatisticsPerStream::class);
        $this->muxings = ObjectMapper::map($this->muxings, StatisticsPerMuxing::class);
        $this->features = ObjectMapper::map($this->features, BillableEncodingFeatureMinutes::class);
    }
}

