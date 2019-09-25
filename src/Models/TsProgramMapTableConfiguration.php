<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TsProgramMapTableConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $pid;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * An integer value. Packet Identifier (PID) for the MPEG Transport Stream PMT.
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

