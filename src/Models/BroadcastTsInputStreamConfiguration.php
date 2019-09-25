<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BroadcastTsInputStreamConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $streamId;

    /** @var int */
    public $packetIdentifier;

    /** @var bool */
    public $startWithDiscontinuityIndicator;

    /** @var bool */
    public $alignPes;

    /** @var RaiUnit */
    public $setRaiOnAu;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->setRaiOnAu = ObjectMapper::map($this->setRaiOnAu, RaiUnit::class);
    }

    /**
     * The UUID of the stream to which this configuration belongs to. This has to be a ID of a stream that has been added to the current muxing.
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
     * Start stream with initial discontinuity indicator set to one. If true, set the discontinuity indicator in the first packet for this PID.
     *
     * @param bool $startWithDiscontinuityIndicator
     * @return $this
     */
    public function startWithDiscontinuityIndicator(bool $startWithDiscontinuityIndicator)
    {
        $this->startWithDiscontinuityIndicator = $startWithDiscontinuityIndicator;

        return $this;
    }

    /**
     * Align access units to PES packets. If true, align access units to PES packet headers. Uses adaptation field stuffing to position an access unit at the beginning of each PES packet.
     *
     * @param bool $alignPes
     * @return $this
     */
    public function alignPes(bool $alignPes)
    {
        $this->alignPes = $alignPes;

        return $this;
    }

    /**
     * setRaiOnAu
     *
     * @param RaiUnit $setRaiOnAu
     * @return $this
     */
    public function setRaiOnAu(RaiUnit $setRaiOnAu)
    {
        $this->setRaiOnAu = $setRaiOnAu;

        return $this;
    }
}

