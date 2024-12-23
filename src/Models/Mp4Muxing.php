<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Mp4Muxing extends Muxing
{
    /** @var string */
    public $filename;

    /** @var int */
    public $fragmentDuration;

    /** @var FragmentedMp4MuxingManifestType */
    public $fragmentedMP4MuxingManifestType;

    /** @var DolbyVisionMuxingConfiguration */
    public $dolbyVisionConfiguration;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->fragmentedMP4MuxingManifestType = ObjectMapper::map($this->fragmentedMP4MuxingManifestType, FragmentedMp4MuxingManifestType::class);
        $this->dolbyVisionConfiguration = ObjectMapper::map($this->dolbyVisionConfiguration, DolbyVisionMuxingConfiguration::class);
    }

    /**
     * Name of the output file (either &#x60;filename&#x60; or &#x60;name&#x60; is required, prefer &#x60;filename&#x60;)
     *
     * @param string $filename
     * @return $this
     */
    public function filename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Duration of fragments in milliseconds. Required for Fragmented MP4 Muxing (for Smooth Streaming or DASH On-Demand). Not setting this will result in unfragmented mp4.
     *
     * @param int $fragmentDuration
     * @return $this
     */
    public function fragmentDuration(int $fragmentDuration)
    {
        $this->fragmentDuration = $fragmentDuration;

        return $this;
    }

    /**
     * fragmentedMP4MuxingManifestType
     *
     * @param FragmentedMp4MuxingManifestType $fragmentedMP4MuxingManifestType
     * @return $this
     */
    public function fragmentedMP4MuxingManifestType(FragmentedMp4MuxingManifestType $fragmentedMP4MuxingManifestType)
    {
        $this->fragmentedMP4MuxingManifestType = $fragmentedMP4MuxingManifestType;

        return $this;
    }

    /**
     * Dolby Vision specific configuration
     *
     * @param DolbyVisionMuxingConfiguration $dolbyVisionConfiguration
     * @return $this
     */
    public function dolbyVisionConfiguration(DolbyVisionMuxingConfiguration $dolbyVisionConfiguration)
    {
        $this->dolbyVisionConfiguration = $dolbyVisionConfiguration;

        return $this;
    }
}

