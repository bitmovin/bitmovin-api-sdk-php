<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AkamaiMslOutput extends Output
{
    /** @var int */
    public $streamId;

    /** @var string */
    public $eventName;

    /** @var AkamaiMslStreamFormat */
    public $streamFormat;

    /** @var AkamaiMslVersion */
    public $mslVersion;

    /** @var MslPublishingAuthentication */
    public $publishingAuthentication;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->streamFormat = ObjectMapper::map($this->streamFormat, AkamaiMslStreamFormat::class);
        $this->mslVersion = ObjectMapper::map($this->mslVersion, AkamaiMslVersion::class);
        $this->publishingAuthentication = ObjectMapper::map($this->publishingAuthentication, MslPublishingAuthentication::class);
    }

    /**
     * The Akamai stream ID (required)
     *
     * @param int $streamId
     * @return $this
     */
    public function streamId(int $streamId)
    {
        $this->streamId = $streamId;

        return $this;
    }

    /**
     * The Akamai event name (required)
     *
     * @param string $eventName
     * @return $this
     */
    public function eventName(string $eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * - DASH: configure the Encoding with fMP4 or CMAF muxings and a DASH manifest. - HLS: configure the Encoding with TS muxings and an HLS manifest. - CMAF: configure the Encoding with fMP4 or CMAF muxings with both DASH and HLS manifests. (required)
     *
     * @param AkamaiMslStreamFormat $streamFormat
     * @return $this
     */
    public function streamFormat(AkamaiMslStreamFormat $streamFormat)
    {
        $this->streamFormat = $streamFormat;

        return $this;
    }

    /**
     * The Akamai MSL Version. MSL4 and MSL5 are supported. (required)
     *
     * @param AkamaiMslVersion $mslVersion
     * @return $this
     */
    public function mslVersion(AkamaiMslVersion $mslVersion)
    {
        $this->mslVersion = $mslVersion;

        return $this;
    }

    /**
     * MSL5 only. HTTP Digest publishing credentials. Sending this field with &#x60;mslVersion: MSL4&#x60; is rejected. Credentials (username, password) are write-only and not returned in responses.
     *
     * @param MslPublishingAuthentication $publishingAuthentication
     * @return $this
     */
    public function publishingAuthentication(MslPublishingAuthentication $publishingAuthentication)
    {
        $this->publishingAuthentication = $publishingAuthentication;

        return $this;
    }
}

