<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StartLiveEncodingRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $streamKey;

    /** @var \BitmovinApiSdk\Models\LiveHlsManifest[] */
    public $hlsManifests;

    /** @var \BitmovinApiSdk\Models\LiveDashManifest[] */
    public $dashManifests;

    /** @var EncodingMode */
    public $liveEncodingMode;

    /** @var ReuploadSettings */
    public $reuploadSettings;

    /** @var ManifestGenerator */
    public $manifestGenerator;

    /** @var AutoRestartConfiguration */
    public $autoRestartConfiguration;

    /** @var LiveAutoShutdownConfiguration */
    public $autoShutdownConfiguration;

    /** @var EsamSettings */
    public $esamSettings;

    /** @var CacheControlSettings */
    public $cacheControlSettings;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->hlsManifests = ObjectMapper::map($this->hlsManifests, LiveHlsManifest::class);
        $this->dashManifests = ObjectMapper::map($this->dashManifests, LiveDashManifest::class);
        $this->liveEncodingMode = ObjectMapper::map($this->liveEncodingMode, EncodingMode::class);
        $this->reuploadSettings = ObjectMapper::map($this->reuploadSettings, ReuploadSettings::class);
        $this->manifestGenerator = ObjectMapper::map($this->manifestGenerator, ManifestGenerator::class);
        $this->autoRestartConfiguration = ObjectMapper::map($this->autoRestartConfiguration, AutoRestartConfiguration::class);
        $this->autoShutdownConfiguration = ObjectMapper::map($this->autoShutdownConfiguration, LiveAutoShutdownConfiguration::class);
        $this->esamSettings = ObjectMapper::map($this->esamSettings, EsamSettings::class);
        $this->cacheControlSettings = ObjectMapper::map($this->cacheControlSettings, CacheControlSettings::class);
    }

    /**
     * Key for the stream. (a-zA-Z, 3-20 characters) (required)
     *
     * @param string $streamKey
     * @return $this
     */
    public function streamKey(string $streamKey)
    {
        $this->streamKey = $streamKey;

        return $this;
    }

    /**
     * HLS manifests to be generated during the encoding. See [documentation](https://developer.bitmovin.com/encoding/docs/how-to-create-manifests-for-your-encodings#just-in-time-jit)
     *
     * @param \BitmovinApiSdk\Models\LiveHlsManifest[] $hlsManifests
     * @return $this
     */
    public function hlsManifests(array $hlsManifests)
    {
        $this->hlsManifests = $hlsManifests;

        return $this;
    }

    /**
     * DASH manifests to be generated during the encoding. See [documentation](https://developer.bitmovin.com/encoding/docs/how-to-create-manifests-for-your-encodings#just-in-time-jit)
     *
     * @param \BitmovinApiSdk\Models\LiveDashManifest[] $dashManifests
     * @return $this
     */
    public function dashManifests(array $dashManifests)
    {
        $this->dashManifests = $dashManifests;

        return $this;
    }

    /**
     * The pass mode of the encoding. Must only be set when &#x60;encodingMode&#x60; is not set on any codec configuration used by this encoding.
     *
     * @param EncodingMode $liveEncodingMode
     * @return $this
     */
    public function liveEncodingMode(EncodingMode $liveEncodingMode)
    {
        $this->liveEncodingMode = $liveEncodingMode;

        return $this;
    }

    /**
     * Reupload specific files during a live encoding. This can be helpful if an automatic life cycle policy is enabled on the output storage
     *
     * @param ReuploadSettings $reuploadSettings
     * @return $this
     */
    public function reuploadSettings(ReuploadSettings $reuploadSettings)
    {
        $this->reuploadSettings = $reuploadSettings;

        return $this;
    }

    /**
     * Major version of the manifest generator to be used for manifests referenced in this request (by properties dashManifests, dashManifests). &#x60;V2&#x60; is available for encoder versions 2.70.0 and above and is the recommended option. The default value depends on the sign-up date of your organization. See [documentation](https://developer.bitmovin.com/encoding/docs/manifest-generator-v2) page for a detailed explanation.
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
     * Configuration for auto restarting the live encoding
     *
     * @param AutoRestartConfiguration $autoRestartConfiguration
     * @return $this
     */
    public function autoRestartConfiguration(AutoRestartConfiguration $autoRestartConfiguration)
    {
        $this->autoRestartConfiguration = $autoRestartConfiguration;

        return $this;
    }

    /**
     * Configuration for auto shutdown of the live encoding
     *
     * @param LiveAutoShutdownConfiguration $autoShutdownConfiguration
     * @return $this
     */
    public function autoShutdownConfiguration(LiveAutoShutdownConfiguration $autoShutdownConfiguration)
    {
        $this->autoShutdownConfiguration = $autoShutdownConfiguration;

        return $this;
    }

    /**
     * Configuration for Event Signaling and Management (ESAM) system,  allowing the encoder to communicate with an ESAM server for signal processing and dynamic ad insertion update.&#39;
     *
     * @param EsamSettings $esamSettings
     * @return $this
     */
    public function esamSettings(EsamSettings $esamSettings)
    {
        $this->esamSettings = $esamSettings;

        return $this;
    }

    /**
     * Configuration of cache control policies for media segments, HLS, and DASH manifests.  You can set caching for the HLS multivariant playlist, HLS media playlist, DASH timeline manifest,  DASH template manifest, initialization segment, and media segment.
     *
     * @param CacheControlSettings $cacheControlSettings
     * @return $this
     */
    public function cacheControlSettings(CacheControlSettings $cacheControlSettings)
    {
        $this->cacheControlSettings = $cacheControlSettings;

        return $this;
    }
}

