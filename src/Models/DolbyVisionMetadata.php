<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyVisionMetadata extends BitmovinResource
{
    /** @var DolbyVisionProfile */
    public $profile;

    /** @var DolbyVisionMetadataSource */
    public $metadataSource;

    /** @var string */
    public $metadataInputStreamId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->profile = ObjectMapper::map($this->profile, DolbyVisionProfile::class);
        $this->metadataSource = ObjectMapper::map($this->metadataSource, DolbyVisionMetadataSource::class);
    }

    /**
     * Dolby Vision Profile (required)
     *
     * @param DolbyVisionProfile $profile
     * @return $this
     */
    public function profile(DolbyVisionProfile $profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Dolby Vision Metadata Source (required)
     *
     * @param DolbyVisionMetadataSource $metadataSource
     * @return $this
     */
    public function metadataSource(DolbyVisionMetadataSource $metadataSource)
    {
        $this->metadataSource = $metadataSource;

        return $this;
    }

    /**
     * ID of the Dolby Vision Metadata Ingest Input Stream which provides the XML Metadata file. Required if metadataSource is set to INPUT_STREAM.
     *
     * @param string $metadataInputStreamId
     * @return $this
     */
    public function metadataInputStreamId(string $metadataInputStreamId)
    {
        $this->metadataInputStreamId = $metadataInputStreamId;

        return $this;
    }
}

