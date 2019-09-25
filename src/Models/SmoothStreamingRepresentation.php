<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SmoothStreamingRepresentation extends BitmovinResource
{
    /** @var string */
    public $encodingId;

    /** @var string */
    public $muxingId;

    /** @var string */
    public $mediaFile;

    /** @var string */
    public $language;

    /** @var string */
    public $trackName;

    /** @var int */
    public $priority;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Id of the encoding (required)
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
     * Id of the muxing. (required)
     *
     * @param string $muxingId
     * @return $this
     */
    public function muxingId(string $muxingId)
    {
        $this->muxingId = $muxingId;

        return $this;
    }

    /**
     * The Smooth Streaming ismv or isma file that will be referenced in the manifest. (required)
     *
     * @param string $mediaFile
     * @return $this
     */
    public function mediaFile(string $mediaFile)
    {
        $this->mediaFile = $mediaFile;

        return $this;
    }

    /**
     * Language of the MP4 file
     *
     * @param string $language
     * @return $this
     */
    public function language(string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Track where this MP4 shoudl be added
     *
     * @param string $trackName
     * @return $this
     */
    public function trackName(string $trackName)
    {
        $this->trackName = $trackName;

        return $this;
    }

    /**
     * Specify the priority of this representation. Representations with higher priority will be listed first in the manifest.
     *
     * @param int $priority
     * @return $this
     */
    public function priority(int $priority)
    {
        $this->priority = $priority;

        return $this;
    }
}

