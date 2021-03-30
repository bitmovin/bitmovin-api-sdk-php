<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BroadcastTsSubtitleInputStreamConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $streamId;

    /** @var int */
    public $packetIdentifier;

    /** @var int */
    public $rate;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The UUID of the subtitle stream to which this configuration belongs to. This has to be an ID of an subtitle stream that has been added to the current muxing.
     *
     * @param string $streamId
     * @return $this
     */
    public function streamId(string $streamId)
    {
        $this->streamId = $streamId;

        return $this;
    }

    /**
     * An integer value. Packet Identifier (PID) for this stream.
     *
     * @param int $packetIdentifier
     * @return $this
     */
    public function packetIdentifier(int $packetIdentifier)
    {
        $this->packetIdentifier = $packetIdentifier;

        return $this;
    }

    /**
     * The rate parameter determines the maximum rate in bits per second that should be used for the subtitle stream. The valid range is &#x60;100&#x60; to &#x60;60 000 000&#x60; bps or &#x60;0&#x60;. If the value is set to 0, we will examine the first 100 packets of subtitle packet data and use the highest rate that was computed. If the value is set too low, not enough to accommodate the subtitle bit-rate, then some PES packets corresponding to DVB subtitle stream will be dropped. This parameter is optional and the default value is 0.
     *
     * @param int $rate
     * @return $this
     */
    public function rate(int $rate)
    {
        $this->rate = $rate;

        return $this;
    }
}

