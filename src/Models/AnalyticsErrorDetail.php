<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsErrorDetail extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $errorId;

    /** @var Carbon */
    public $time;

    /** @var Carbon */
    public $clientTime;

    /** @var int */
    public $code;

    /** @var string */
    public $message;

    /** @var \BitmovinApiSdk\Models\AnalyticsErrorData */
    public $errorData;

    /** @var \BitmovinApiSdk\Models\AnalyticsHttpRequest[] */
    public $httpRequests;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->time = ObjectMapper::map($this->time, Carbon::class);
        $this->clientTime = ObjectMapper::map($this->clientTime, Carbon::class);
        $this->errorData = ObjectMapper::map($this->errorData, AnalyticsErrorData::class);
        $this->httpRequests = ObjectMapper::map($this->httpRequests, AnalyticsHttpRequest::class);
    }

    /**
     * Error id
     *
     * @param int $errorId
     * @return $this
     */
    public function errorId(int $errorId)
    {
        $this->errorId = $errorId;

        return $this;
    }

    /**
     * Server timestamp
     *
     * @param Carbon $time
     * @return $this
     */
    public function time(Carbon $time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Client timestamp
     *
     * @param Carbon $clientTime
     * @return $this
     */
    public function clientTime(Carbon $clientTime)
    {
        $this->clientTime = $clientTime;

        return $this;
    }

    /**
     * Error code
     *
     * @param int $code
     * @return $this
     */
    public function code(int $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Error message
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
     * errorData
     *
     * @param \BitmovinApiSdk\Models\AnalyticsErrorData $errorData
     * @return $this
     */
    public function errorData(\BitmovinApiSdk\Models\AnalyticsErrorData $errorData)
    {
        $this->errorData = $errorData;

        return $this;
    }

    /**
     * httpRequests
     *
     * @param \BitmovinApiSdk\Models\AnalyticsHttpRequest[] $httpRequests
     * @return $this
     */
    public function httpRequests(array $httpRequests)
    {
        $this->httpRequests = $httpRequests;

        return $this;
    }
}

