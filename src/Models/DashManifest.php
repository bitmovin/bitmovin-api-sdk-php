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

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->profile = ObjectMapper::map($this->profile, DashProfile::class);
        $this->namespaces = ObjectMapper::map($this->namespaces, XmlNamespace::class);
        $this->utcTimings = ObjectMapper::map($this->utcTimings, UtcTiming::class);
    }

    /**
     * profile
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
}

