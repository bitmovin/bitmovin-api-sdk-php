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
     * Major version of the manifest generator to be used. &#x60;V2&#x60; is the recommended option and requires the following minimum encoder versions: 2.121.0 for DASH, 2.111.0 for HLS, 2.108.0 for SMOOTH. The default value depends on the sign-up date of your organization. See [documentation](https://developer.bitmovin.com/encoding/docs/manifest-generator-v2) page for a detailed explanation.
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

