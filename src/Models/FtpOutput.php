<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class FtpOutput extends Output
{
    /** @var string */
    public $host;

    /** @var int */
    public $port;

    /** @var bool */
    public $passive;

    /** @var string */
    public $username;

    /** @var string */
    public $password;

    /** @var TransferVersion */
    public $transferVersion;

    /** @var int */
    public $maxConcurrentConnections;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->transferVersion = ObjectMapper::map($this->transferVersion, TransferVersion::class);
    }

    /**
     * Host URL or IP of the FTP server (required)
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
     * Port to use, standard for FTP: 21
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
     * Use passive mode. Default is true.
     *
     * @param bool $passive
     * @return $this
     */
    public function passive(bool $passive)
    {
        $this->passive = $passive;

        return $this;
    }

    /**
     * Your FTP Username
     *
     * @param string $username
     * @return $this
     */
    public function username(string $username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Your FTP password
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
     * Controls which transfer version should be used
     *
     * @param TransferVersion $transferVersion
     * @return $this
     */
    public function transferVersion(TransferVersion $transferVersion)
    {
        $this->transferVersion = $transferVersion;

        return $this;
    }

    /**
     * Restrict maximum concurrent connections. Requires at least version 1.1.0.
     *
     * @param int $maxConcurrentConnections
     * @return $this
     */
    public function maxConcurrentConnections(int $maxConcurrentConnections)
    {
        $this->maxConcurrentConnections = $maxConcurrentConnections;

        return $this;
    }
}

