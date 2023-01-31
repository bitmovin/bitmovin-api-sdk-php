<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TextMuxing extends Muxing
{
    /** @var string */
    public $filename;

    /** @var int */
    public $startOffset;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Name of the output file (required)
     *
     * @param string $filename
     * @return $this
     */
    public function filename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Offset of MPEG-TS timestamps in seconds. This only affects streams with [WebVttConfiguration](#/Encoding/PostEncodingConfigurationsSubtitlesWebVtt). If set, the X-TIMESTAMP-MAP will be added as described in the [HLS specification](https://datatracker.ietf.org/doc/html/rfc8216#section-3.5). For example, if set to 10 seconds, *X-TIMESTAMP-MAP&#x3D;MPEGTS:900000,LOCAL:00:00:00.000* will be added after each *WEBVTT* header. The default for TextMuxing is that the X-TIMESTAMP-MAP will not be written. Important to note is that the default for &#x60;startOffset&#x60; for [TsMuxings](#/Encoding/PostEncodingEncodingsMuxingsTsByEncodingId) and [ProgressiveTsMuxings](#/Encoding/PostEncodingEncodingsMuxingsProgressiveTsByEncodingId) is 10 seconds. If the output of this muxing is used for HLS together with video/audio streams using TsMuxings and ProgressiveTsMuxings, this value should be set to the same &#x60;startOffset&#x60;.
     *
     * @param int $startOffset
     * @return $this
     */
    public function startOffset(int $startOffset)
    {
        $this->startOffset = $startOffset;

        return $this;
    }
}

