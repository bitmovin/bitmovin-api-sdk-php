<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class RtmpUserIngestInfo extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $address;

    /** @var string */
    public $app;

    /** @var string */
    public $streamKey;

    /** @var string */
    public $flashVersion;

    /** @var string */
    public $clientId;

    /** @var string */
    public $eventType;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Client public IP address.
     *
     * @param string $address
     * @return $this
     */
    public function address(string $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * RTMP application name.
     *
     * @param string $app
     * @return $this
     */
    public function app(string $app)
    {
        $this->app = $app;

        return $this;
    }

    /**
     * Client stream key.
     *
     * @param string $streamKey
     * @return $this
     */
    public function streamKey(string $streamKey)
    {
        $this->streamKey = $streamKey;

        return $this;
    }

    /**
     * Flash version string / encoder identity.
     *
     * @param string $flashVersion
     * @return $this
     */
    public function flashVersion(string $flashVersion)
    {
        $this->flashVersion = $flashVersion;

        return $this;
    }

    /**
     * Session/client connection ID.
     *
     * @param string $clientId
     * @return $this
     */
    public function clientId(string $clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Server action.
     *
     * @param string $eventType
     * @return $this
     */
    public function eventType(string $eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }
}

