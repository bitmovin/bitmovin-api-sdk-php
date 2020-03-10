<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashManifestDefault extends DashManifest
{
    /** @var string */
    public $encodingId;

    /** @var DashManifestDefaultVersion */
    public $version;

    /** @var \BitmovinApiSdk\Models\DefaultDashManifestPeriod[] */
    public $periods;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->version = ObjectMapper::map($this->version, DashManifestDefaultVersion::class);
        $this->periods = ObjectMapper::map($this->periods, DefaultDashManifestPeriod::class);
    }

    /**
     * The id of the encoding to create a default manifest from. Required: encodingId or periods
     *
     * @param string $encodingId
     * @return $this
     */
    public function encodingId(string $encodingId)
    {
        $this->encodingId = $encodingId;

        return $this;
    }

    /**
     * The version of the default manifest generator
     *
     * @param DashManifestDefaultVersion $version
     * @return $this
     */
    public function version(DashManifestDefaultVersion $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Adds a period for every item. Required: encodingId or periods
     *
     * @param \BitmovinApiSdk\Models\DefaultDashManifestPeriod[] $periods
     * @return $this
     */
    public function periods(array $periods)
    {
        $this->periods = $periods;

        return $this;
    }
}

