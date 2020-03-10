<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SrtStatisticRecv extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $bytes;

    /** @var int */
    public $bytesDropped;

    /** @var int */
    public $bytesLost;

    /** @var float */
    public $mbitRate;

    /** @var int */
    public $packets;

    /** @var int */
    public $packetsBelated;

    /** @var int */
    public $packetsDropped;

    /** @var int */
    public $packetsLost;

    /** @var int */
    public $packetsRetransmitted;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * bytes
     *
     * @param int $bytes
     * @return $this
     */
    public function bytes(int $bytes)
    {
        $this->bytes = $bytes;

        return $this;
    }

    /**
     * bytesDropped
     *
     * @param int $bytesDropped
     * @return $this
     */
    public function bytesDropped(int $bytesDropped)
    {
        $this->bytesDropped = $bytesDropped;

        return $this;
    }

    /**
     * bytesLost
     *
     * @param int $bytesLost
     * @return $this
     */
    public function bytesLost(int $bytesLost)
    {
        $this->bytesLost = $bytesLost;

        return $this;
    }

    /**
     * mbitRate
     *
     * @param float $mbitRate
     * @return $this
     */
    public function mbitRate(float $mbitRate)
    {
        $this->mbitRate = $mbitRate;

        return $this;
    }

    /**
     * packets
     *
     * @param int $packets
     * @return $this
     */
    public function packets(int $packets)
    {
        $this->packets = $packets;

        return $this;
    }

    /**
     * packetsBelated
     *
     * @param int $packetsBelated
     * @return $this
     */
    public function packetsBelated(int $packetsBelated)
    {
        $this->packetsBelated = $packetsBelated;

        return $this;
    }

    /**
     * packetsDropped
     *
     * @param int $packetsDropped
     * @return $this
     */
    public function packetsDropped(int $packetsDropped)
    {
        $this->packetsDropped = $packetsDropped;

        return $this;
    }

    /**
     * packetsLost
     *
     * @param int $packetsLost
     * @return $this
     */
    public function packetsLost(int $packetsLost)
    {
        $this->packetsLost = $packetsLost;

        return $this;
    }

    /**
     * packetsRetransmitted
     *
     * @param int $packetsRetransmitted
     * @return $this
     */
    public function packetsRetransmitted(int $packetsRetransmitted)
    {
        $this->packetsRetransmitted = $packetsRetransmitted;

        return $this;
    }
}

