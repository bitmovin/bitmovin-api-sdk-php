<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingOutputPathsForOutput extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\EncodingOutputPathsDashManifest[] */
    public $dashManifests;

    /** @var \BitmovinApiSdk\Models\EncodingOutputPathsHlsManifest[] */
    public $hlsManifests;

    /** @var \BitmovinApiSdk\Models\EncodingOutputPathsSmoothManifest[] */
    public $smoothManifests;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->dashManifests = ObjectMapper::map($this->dashManifests, EncodingOutputPathsDashManifest::class);
        $this->hlsManifests = ObjectMapper::map($this->hlsManifests, EncodingOutputPathsHlsManifest::class);
        $this->smoothManifests = ObjectMapper::map($this->smoothManifests, EncodingOutputPathsSmoothManifest::class);
    }

    /**
     * Output paths for Dash manifests
     *
     * @param \BitmovinApiSdk\Models\EncodingOutputPathsDashManifest[] $dashManifests
     * @return $this
     */
    public function dashManifests(array $dashManifests)
    {
        $this->dashManifests = $dashManifests;

        return $this;
    }

    /**
     * Output paths for HLS manifests
     *
     * @param \BitmovinApiSdk\Models\EncodingOutputPathsHlsManifest[] $hlsManifests
     * @return $this
     */
    public function hlsManifests(array $hlsManifests)
    {
        $this->hlsManifests = $hlsManifests;

        return $this;
    }

    /**
     * Output paths for Smooth manifests
     *
     * @param \BitmovinApiSdk\Models\EncodingOutputPathsSmoothManifest[] $smoothManifests
     * @return $this
     */
    public function smoothManifests(array $smoothManifests)
    {
        $this->smoothManifests = $smoothManifests;

        return $this;
    }
}

