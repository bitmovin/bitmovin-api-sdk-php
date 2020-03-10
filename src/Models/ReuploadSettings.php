<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ReuploadSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $dashManifestInterval;

    /** @var float */
    public $hlsManifestInterval;

    /** @var float */
    public $muxingInitFileInterval;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Interval in seconds to reupload the DASH manifest. Valid values are either &#x60;null&#x60; to never reupload the dash manifest or at least &#x60;30&#x60;.
     *
     * @param float $dashManifestInterval
     * @return $this
     */
    public function dashManifestInterval(float $dashManifestInterval)
    {
        $this->dashManifestInterval = $dashManifestInterval;

        return $this;
    }

    /**
     * Interval in seconds to reupload the HLS master file. Valid values are either &#x60;0&#x60; to never reupload the hls manifest or at least &#x60;30&#x60;. This is currently not used, as the master file will always be uploaded when one of the playlist files has changed.
     *
     * @param float $hlsManifestInterval
     * @return $this
     */
    public function hlsManifestInterval(float $hlsManifestInterval)
    {
        $this->hlsManifestInterval = $hlsManifestInterval;

        return $this;
    }

    /**
     * The interval in seconds to reupload the init file for segmented muxings, e.g. fMP4, WebM. Valid values are either &#x60;null&#x60; to never reupload the init file for segmented muxings or at least &#x60;30&#x60;.
     *
     * @param float $muxingInitFileInterval
     * @return $this
     */
    public function muxingInitFileInterval(float $muxingInitFileInterval)
    {
        $this->muxingInitFileInterval = $muxingInitFileInterval;

        return $this;
    }
}

