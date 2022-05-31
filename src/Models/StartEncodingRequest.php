<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StartEncodingRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Trimming */
    public $trimming;

    /** @var Scheduling */
    public $scheduling;

    /** @var Tweaks */
    public $tweaks;

    /** @var bool */
    public $handleVariableInputFps;

    /** @var EncodingMode */
    public $encodingMode;

    /** @var \BitmovinApiSdk\Models\ManifestResource[] */
    public $previewDashManifests;

    /** @var \BitmovinApiSdk\Models\ManifestResource[] */
    public $previewHlsManifests;

    /** @var \BitmovinApiSdk\Models\ManifestResource[] */
    public $vodDashManifests;

    /** @var \BitmovinApiSdk\Models\ManifestResource[] */
    public $vodHlsManifests;

    /** @var \BitmovinApiSdk\Models\ManifestResource[] */
    public $vodSmoothManifests;

    /** @var ManifestGenerator */
    public $manifestGenerator;

    /** @var PerTitle */
    public $perTitle;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->trimming = ObjectMapper::map($this->trimming, Trimming::class);
        $this->scheduling = ObjectMapper::map($this->scheduling, Scheduling::class);
        $this->tweaks = ObjectMapper::map($this->tweaks, Tweaks::class);
        $this->encodingMode = ObjectMapper::map($this->encodingMode, EncodingMode::class);
        $this->previewDashManifests = ObjectMapper::map($this->previewDashManifests, ManifestResource::class);
        $this->previewHlsManifests = ObjectMapper::map($this->previewHlsManifests, ManifestResource::class);
        $this->vodDashManifests = ObjectMapper::map($this->vodDashManifests, ManifestResource::class);
        $this->vodHlsManifests = ObjectMapper::map($this->vodHlsManifests, ManifestResource::class);
        $this->vodSmoothManifests = ObjectMapper::map($this->vodSmoothManifests, ManifestResource::class);
        $this->manifestGenerator = ObjectMapper::map($this->manifestGenerator, ManifestGenerator::class);
        $this->perTitle = ObjectMapper::map($this->perTitle, PerTitle::class);
    }

    /**
     * Allows to encode only part of the input. Defines start (offset) and duration of the desired section. This is not allowed when the Encoding uses any kind of Input Stream resource.
     *
     * @param Trimming $trimming
     * @return $this
     */
    public function trimming(Trimming $trimming)
    {
        $this->trimming = $trimming;

        return $this;
    }

    /**
     * Set scheduling parameters of the encoding.
     *
     * @param Scheduling $scheduling
     * @return $this
     */
    public function scheduling(Scheduling $scheduling)
    {
        $this->scheduling = $scheduling;

        return $this;
    }

    /**
     * Set special tweaks for your encoding job.
     *
     * @param Tweaks $tweaks
     * @return $this
     */
    public function tweaks(Tweaks $tweaks)
    {
        $this->tweaks = $tweaks;

        return $this;
    }

    /**
     * Enable frame dropping/duplication to handle variable frames per seconds of video input streams
     *
     * @param bool $handleVariableInputFps
     * @return $this
     */
    public function handleVariableInputFps(bool $handleVariableInputFps)
    {
        $this->handleVariableInputFps = $handleVariableInputFps;

        return $this;
    }

    /**
     * The pass mode of the encoding
     *
     * @param EncodingMode $encodingMode
     * @return $this
     */
    public function encodingMode(EncodingMode $encodingMode)
    {
        $this->encodingMode = $encodingMode;

        return $this;
    }

    /**
     * List of preview DASH manifests to be created
     *
     * @param \BitmovinApiSdk\Models\ManifestResource[] $previewDashManifests
     * @return $this
     */
    public function previewDashManifests(array $previewDashManifests)
    {
        $this->previewDashManifests = $previewDashManifests;

        return $this;
    }

    /**
     * List of preview HLS manifests to be created
     *
     * @param \BitmovinApiSdk\Models\ManifestResource[] $previewHlsManifests
     * @return $this
     */
    public function previewHlsManifests(array $previewHlsManifests)
    {
        $this->previewHlsManifests = $previewHlsManifests;

        return $this;
    }

    /**
     * List of VoD DASH manifests to be created after encoding finished successfully
     *
     * @param \BitmovinApiSdk\Models\ManifestResource[] $vodDashManifests
     * @return $this
     */
    public function vodDashManifests(array $vodDashManifests)
    {
        $this->vodDashManifests = $vodDashManifests;

        return $this;
    }

    /**
     * List of VoD HLS manifests to be created after encoding finished successfully
     *
     * @param \BitmovinApiSdk\Models\ManifestResource[] $vodHlsManifests
     * @return $this
     */
    public function vodHlsManifests(array $vodHlsManifests)
    {
        $this->vodHlsManifests = $vodHlsManifests;

        return $this;
    }

    /**
     * List of VoD SMOOTH manifests to be created after encoding finished successfully
     *
     * @param \BitmovinApiSdk\Models\ManifestResource[] $vodSmoothManifests
     * @return $this
     */
    public function vodSmoothManifests(array $vodSmoothManifests)
    {
        $this->vodSmoothManifests = $vodSmoothManifests;

        return $this;
    }

    /**
     * Sets the version of the manifest generation engine
     *
     * @param ManifestGenerator $manifestGenerator
     * @return $this
     */
    public function manifestGenerator(ManifestGenerator $manifestGenerator)
    {
        $this->manifestGenerator = $manifestGenerator;

        return $this;
    }

    /**
     * Per-Title settings
     *
     * @param PerTitle $perTitle
     * @return $this
     */
    public function perTitle(PerTitle $perTitle)
    {
        $this->perTitle = $perTitle;

        return $this;
    }
}

