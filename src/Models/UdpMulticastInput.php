<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class UdpMulticastInput extends Input
{
    /** @var string */
    public $host;

    /** @var int */
    public $port;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Host name or IP address to use (required)
     *
     * @param string $host
     * @return $this
     */
    public function host(string $host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Port to use (required)
     *
     * @param int $port
     * @return $this
     */
    public function port(int $port)
    {
        $this->port = $port;

        return $this;
    }
}

