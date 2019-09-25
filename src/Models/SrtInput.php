<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SrtInput extends Input
{
    /** @var SrtMode */
    public $mode;

    /** @var string */
    public $host;

    /** @var int */
    public $port;

    /** @var string */
    public $path;

    /** @var int */
    public $latency;

    /** @var string */
    public $passphrase;

    /** @var int */
    public $keyLength;

    /** @var \BitmovinApiSdk\Models\BackupSrtInputs */
    public $backupSrtInputs;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->mode = ObjectMapper::map($this->mode, SrtMode::class);
        $this->backupSrtInputs = ObjectMapper::map($this->backupSrtInputs, BackupSrtInputs::class);
    }

    /**
     * The SRT mode to use (required)
     *
     * @param SrtMode $mode
     * @return $this
     */
    public function mode(SrtMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * The name or IP of the host providing the SRT stream (only used in CALLER mode)
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
     * The port to connect to or listen on. Has to be one of [2088, 2089, 2090, 2091] when using LISTENER mode. (required)
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
     * The path parameter of the SRT stream
     *
     * @param string $path
     * @return $this
     */
    public function path(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * The maximum accepted transmission latency in milliseconds (when both parties set different values, the maximum of the two is used for both)
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
     * The passphrase used to secure the SRT stream. For AES-128 encryption, you must enter a 16-character passphrase; for AES-256, you must enter a 32-character passphrase
     *
     * @param string $passphrase
     * @return $this
     */
    public function passphrase(string $passphrase)
    {
        $this->passphrase = $passphrase;

        return $this;
    }

    /**
     * The type of AES encryption determines the length of the key (passphrase). AES-128 uses a 16-character (128-bit) passphrase, and AES-256 uses a 32-character (256-bit) passphrase.
     *
     * @param int $keyLength
     * @return $this
     */
    public function keyLength(int $keyLength)
    {
        $this->keyLength = $keyLength;

        return $this;
    }

    /**
     * backupSrtInputs
     *
     * @param \BitmovinApiSdk\Models\BackupSrtInputs $backupSrtInputs
     * @return $this
     */
    public function backupSrtInputs(\BitmovinApiSdk\Models\BackupSrtInputs $backupSrtInputs)
    {
        $this->backupSrtInputs = $backupSrtInputs;

        return $this;
    }
}

