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
     * The id of the encoding to create a default manifest for. Either \&quot;encodingId\&quot; or \&quot;periods\&quot; is required.
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
     * Specifies the algorithm that determines which output of the given encoding is included into the manifest. Note that this is not related to the \&quot;manifestGenerator\&quot; version of the \&quot;Start\&quot; request.
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
     * Adds a period for every item. Can only be used when setting \&quot;version\&quot; to \&quot;V2\&quot;. Either \&quot;periods\&quot; or \&quot;encodingId\&quot; is required.
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

