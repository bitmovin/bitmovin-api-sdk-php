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

    /** @var AutoRestartConfiguration */
    public $autoRestartConfiguration;

    /** @var string[] */
    public $staticIpId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->hlsManifests = ObjectMapper::map($this->hlsManifests, LiveHlsManifest::class);
        $this->dashManifests = ObjectMapper::map($this->dashManifests, LiveDashManifest::class);
        $this->liveEncodingMode = ObjectMapper::map($this->liveEncodingMode, EncodingMode::class);
        $this->reuploadSettings = ObjectMapper::map($this->reuploadSettings, ReuploadSettings::class);
        $this->autoRestartConfiguration = ObjectMapper::map($this->autoRestartConfiguration, AutoRestartConfiguration::class);
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
     * List of Hls manifests to use for this live encoding
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
     * List of Dash manifests to use for this live encoding
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
     * The pass mode of the encoding
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
     * The static IP that will be used for the live encoding. If the provider and the region do not match the encoding start call will fail.
     *
     * @param string[] $staticIpId
     * @return $this
     */
    public function staticIpId(array $staticIpId)
    {
        $this->staticIpId = $staticIpId;

        return $this;
    }
}

