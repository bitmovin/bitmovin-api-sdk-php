<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class HlsInput extends Input
{
    /** @var string */
    public $url;

    /** @var AdMarkersSource */
    public $adMarkersSource;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->adMarkersSource = ObjectMapper::map($this->adMarkersSource, AdMarkersSource::class);
    }

    /**
     * URL of HLS input
     *
     * @param string $url
     * @return $this
     */
    public function url(string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Specifies the source for ad markers messages: - MANIFEST: Ad marker messages are read from tags in the HLS manifest - SEGMENTS: Ad marker messages are read from the content segments from the data stream
     *
     * @param AdMarkersSource $adMarkersSource
     * @return $this
     */
    public function adMarkersSource(AdMarkersSource $adMarkersSource)
    {
        $this->adMarkersSource = $adMarkersSource;

        return $this;
    }
}

