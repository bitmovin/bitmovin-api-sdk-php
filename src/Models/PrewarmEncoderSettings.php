<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PrewarmEncoderSettings extends BitmovinResource
{
    /** @var string */
    public $encoderVersion;

    /** @var int */
    public $minPrewarmed;

    /** @var int */
    public $maxPrewarmed;

    /** @var \BitmovinApiSdk\Models\LogLevel */
    public $logLevel;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->logLevel = ObjectMapper::map($this->logLevel, LogLevel::class);
    }

    /**
     * Encoder Version to be prewarmed. Only one encoder of this version can be prewarmed per cluster. (required)
     *
     * @param string $encoderVersion
     * @return $this
     */
    public function encoderVersion(string $encoderVersion)
    {
        $this->encoderVersion = $encoderVersion;

        return $this;
    }

    /**
     * The minimum number of prewarmed encoders of this Version (required)
     *
     * @param int $minPrewarmed
     * @return $this
     */
    public function minPrewarmed(int $minPrewarmed)
    {
        $this->minPrewarmed = $minPrewarmed;

        return $this;
    }

    /**
     * The maximum number of concurrent prewarmed encoders of this Version
     *
     * @param int $maxPrewarmed
     * @return $this
     */
    public function maxPrewarmed(int $maxPrewarmed)
    {
        $this->maxPrewarmed = $maxPrewarmed;

        return $this;
    }

    /**
     * logLevel
     *
     * @param \BitmovinApiSdk\Models\LogLevel $logLevel
     * @return $this
     */
    public function logLevel(\BitmovinApiSdk\Models\LogLevel $logLevel)
    {
        $this->logLevel = $logLevel;

        return $this;
    }
}

