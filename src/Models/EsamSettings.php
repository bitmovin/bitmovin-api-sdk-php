<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EsamSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $poisEndpoint;

    /** @var string */
    public $acquisitionPointIdentity;

    /** @var string */
    public $zoneIdentity;

    /** @var int */
    public $adAvailOffset;

    /** @var PoisEndpointCredentials */
    public $poisEndpointCredentials;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->poisEndpointCredentials = ObjectMapper::map($this->poisEndpointCredentials, PoisEndpointCredentials::class);
    }

    /**
     * The URL of the Placement Opportunity Information System (POIS) signal processing endpoint.  The encoder transmits SignalProcessingEvents to this endpoint whenever SCTE-35 messages are detected.
     *
     * @param string $poisEndpoint
     * @return $this
     */
    public function poisEndpoint(string $poisEndpoint)
    {
        $this->poisEndpoint = $poisEndpoint;

        return $this;
    }

    /**
     * A unique identifier representing the &#x60;Acquisition Point Identity&#x60; defined in the ESAM specification.
     *
     * @param string $acquisitionPointIdentity
     * @return $this
     */
    public function acquisitionPointIdentity(string $acquisitionPointIdentity)
    {
        $this->acquisitionPointIdentity = $acquisitionPointIdentity;

        return $this;
    }

    /**
     * Specifies the &#x60;Zone Identity&#x60; defined in the ESAM specification.
     *
     * @param string $zoneIdentity
     * @return $this
     */
    public function zoneIdentity(string $zoneIdentity)
    {
        $this->zoneIdentity = $zoneIdentity;

        return $this;
    }

    /**
     * Defines an offset (in milliseconds) to be applied to the stream event timestamp.  This offset adjusts the &#x60;StreamTime&#x60; values (such as PTS) associated with ad opportunities  or content insertions. It is used to fine-tune timing for embedded SCTE-104/35 messages  to ensure precise frame alignment in the transport stream.
     *
     * @param int $adAvailOffset
     * @return $this
     */
    public function adAvailOffset(int $adAvailOffset)
    {
        $this->adAvailOffset = $adAvailOffset;

        return $this;
    }

    /**
     * If authentication is required to access the POIS endpoint, credentials must be provided.
     *
     * @param PoisEndpointCredentials $poisEndpointCredentials
     * @return $this
     */
    public function poisEndpointCredentials(PoisEndpointCredentials $poisEndpointCredentials)
    {
        $this->poisEndpointCredentials = $poisEndpointCredentials;

        return $this;
    }
}

