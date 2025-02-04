<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashManifest extends Manifest
{
    /** @var DashProfile */
    public $profile;

    /** @var string */
    public $manifestName;

    /** @var \BitmovinApiSdk\Models\XmlNamespace[] */
    public $namespaces;

    /** @var \BitmovinApiSdk\Models\UtcTiming[] */
    public $utcTimings;

    /** @var DashEditionCompatibility */
    public $dashEditionCompatibility;

    /** @var DashISO8601TimestampFormat */
    public $iso8601TimestampFormat;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->profile = ObjectMapper::map($this->profile, DashProfile::class);
        $this->namespaces = ObjectMapper::map($this->namespaces, XmlNamespace::class);
        $this->utcTimings = ObjectMapper::map($this->utcTimings, UtcTiming::class);
        $this->dashEditionCompatibility = ObjectMapper::map($this->dashEditionCompatibility, DashEditionCompatibility::class);
        $this->iso8601TimestampFormat = ObjectMapper::map($this->iso8601TimestampFormat, DashISO8601TimestampFormat::class);
    }

    /**
     * Determines if segmented or progressive representations can appear in the manifest
     *
     * @param DashProfile $profile
     * @return $this
     */
    public function profile(DashProfile $profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * The filename of your manifest
     *
     * @param string $manifestName
     * @return $this
     */
    public function manifestName(string $manifestName)
    {
        $this->manifestName = $manifestName;

        return $this;
    }

    /**
     * List of additional XML namespaces to add to the DASH Manifest
     *
     * @param \BitmovinApiSdk\Models\XmlNamespace[] $namespaces
     * @return $this
     */
    public function namespaces(array $namespaces)
    {
        $this->namespaces = $namespaces;

        return $this;
    }

    /**
     * List of UTC Timings to use for live streaming
     *
     * @param \BitmovinApiSdk\Models\UtcTiming[] $utcTimings
     * @return $this
     */
    public function utcTimings(array $utcTimings)
    {
        $this->utcTimings = $utcTimings;

        return $this;
    }

    /**
     * The manifest compatibility with the standard DASH Edition.
     *
     * @param DashEditionCompatibility $dashEditionCompatibility
     * @return $this
     */
    public function dashEditionCompatibility(DashEditionCompatibility $dashEditionCompatibility)
    {
        $this->dashEditionCompatibility = $dashEditionCompatibility;

        return $this;
    }

    /**
     * Determines how timestamps should appear in the manifest
     *
     * @param DashISO8601TimestampFormat $iso8601TimestampFormat
     * @return $this
     */
    public function iso8601TimestampFormat(DashISO8601TimestampFormat $iso8601TimestampFormat)
    {
        $this->iso8601TimestampFormat = $iso8601TimestampFormat;

        return $this;
    }
}

