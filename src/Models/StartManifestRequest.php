<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StartManifestRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var ManifestGenerator */
    public $manifestGenerator;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->manifestGenerator = ObjectMapper::map($this->manifestGenerator, ManifestGenerator::class);
    }

    /**
     * Sets the version of the manifest generation engine. The &#x60;V2&#x60; option is currently only supported for manifests including resources from a single encoding and is only valid in combination with encoder versions &gt;&#x3D;  &#x60;2.108.0&#x60;.
     *
     * @param ManifestGenerator $manifestGenerator
     * @return $this
     */
    public function manifestGenerator(ManifestGenerator $manifestGenerator)
    {
        $this->manifestGenerator = $manifestGenerator;

        return $this;
    }
}

