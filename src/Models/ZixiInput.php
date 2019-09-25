<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ZixiInput extends Input
{
    /** @var string */
    public $host;

    /** @var int */
    public $port;

    /** @var string */
    public $stream;

    /** @var string */
    public $password;

    /** @var int */
    public $latency;

    /** @var int */
    public $minBitrate;

    /** @var string */
    public $decryptionType;

    /** @var string */
    public $decryptionKey;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * host
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
     * port
     *
     * @param int $port
     * @return $this
     */
    public function port(int $port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * stream
     *
     * @param string $stream
     * @return $this
     */
    public function stream(string $stream)
    {
        $this->stream = $stream;

        return $this;
    }

    /**
     * password
     *
     * @param string $password
     * @return $this
     */
    public function password(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * latency
     *
     * @param int $latency
     * @return $this
     */
    public function latency(int $latency)
    {
        $this->latency = $latency;

        return $this;
    }

    /**
     * minBitrate
     *
     * @param int $minBitrate
     * @return $this
     */
    public function minBitrate(int $minBitrate)
    {
        $this->minBitrate = $minBitrate;

        return $this;
    }

    /**
     * decryptionType
     *
     * @param string $decryptionType
     * @return $this
     */
    public function decryptionType(string $decryptionType)
    {
        $this->decryptionType = $decryptionType;

        return $this;
    }

    /**
     * decryptionKey
     *
     * @param string $decryptionKey
     * @return $this
     */
    public function decryptionKey(string $decryptionKey)
    {
        $this->decryptionKey = $decryptionKey;

        return $this;
    }
}

