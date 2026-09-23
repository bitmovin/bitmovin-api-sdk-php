<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisLiveError extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $code;

    /** @var string */
    public $message;

    /** @var Carbon */
    public $timestamp;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->timestamp = ObjectMapper::map($this->timestamp, Carbon::class);
    }

    /**
     * Stable machine-readable failure code (required)
     *
     * @param string $code
     * @return $this
     */
    public function code(string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Credential-free failure description safe to expose to the customer (required)
     *
     * @param string $message
     * @return $this
     */
    public function message(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Time at which the failure was recorded (required)
     *
     * @param Carbon $timestamp
     * @return $this
     */
    public function timestamp(Carbon $timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }
}

