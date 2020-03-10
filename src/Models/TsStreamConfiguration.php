<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TsStreamConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $streamId;

    /** @var int */
    public $pid;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The UUID of the stream to which this configuration belongs to. This has to be a ID of a stream that has been added to the current muxing. (required)
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
     * An integer value. MPEG Transport Stream Packet Identifier (PID) for this stream. (required)
     *
     * @param int $pid
     * @return $this
     */
    public function pid(int $pid)
    {
        $this->pid = $pid;

        return $this;
    }
}

