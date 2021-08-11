<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsHttpRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $clientTime;

    /** @var \BitmovinApiSdk\Models\AnalyticsHttpRequestType */
    public $type;

    /** @var string */
    public $url;

    /** @var string */
    public $lastRedirectLocation;

    /** @var int */
    public $httpStatus;

    /** @var int */
    public $downloadTime;

    /** @var int */
    public $timeToFirstByte;

    /** @var int */
    public $size;

    /** @var bool */
    public $success;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->clientTime = ObjectMapper::map($this->clientTime, Carbon::class);
        $this->type = ObjectMapper::map($this->type, AnalyticsHttpRequestType::class);
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
     * type
     *
     * @param \BitmovinApiSdk\Models\AnalyticsHttpRequestType $type
     * @return $this
     */
    public function type(\BitmovinApiSdk\Models\AnalyticsHttpRequestType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Http request URL
     *
     * @param string $url
     * @return $this
     */
    public function url(string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Last redirect location
     *
     * @param string $lastRedirectLocation
     * @return $this
     */
    public function lastRedirectLocation(string $lastRedirectLocation)
    {
        $this->lastRedirectLocation = $lastRedirectLocation;

        return $this;
    }

    /**
     * Http request status
     *
     * @param int $httpStatus
     * @return $this
     */
    public function httpStatus(int $httpStatus)
    {
        $this->httpStatus = $httpStatus;

        return $this;
    }

    /**
     * Download time
     *
     * @param int $downloadTime
     * @return $this
     */
    public function downloadTime(int $downloadTime)
    {
        $this->downloadTime = $downloadTime;

        return $this;
    }

    /**
     * Time to first byte
     *
     * @param int $timeToFirstByte
     * @return $this
     */
    public function timeToFirstByte(int $timeToFirstByte)
    {
        $this->timeToFirstByte = $timeToFirstByte;

        return $this;
    }

    /**
     * Size
     *
     * @param int $size
     * @return $this
     */
    public function size(int $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Was http request successful
     *
     * @param bool $success
     * @return $this
     */
    public function success(bool $success)
    {
        $this->success = $success;

        return $this;
    }
}

