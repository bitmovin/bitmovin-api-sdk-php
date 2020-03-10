<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InputStream extends BitmovinResource
{
    public static $discriminatorMapping = [
        "INGEST" => IngestInputStream::class,
        "CONCATENATION" => ConcatenationInputStream::class,
        "TRIMMING_TIME_BASED" => TimeBasedTrimmingInputStream::class,
        "TRIMMING_TIME_CODE_TRACK" => TimecodeTrackTrimmingInputStream::class,
        "TRIMMING_H264_PICTURE_TIMING" => H264PictureTimingTrimmingInputStream::class,
        "AUDIO_MIX" => AudioMixInputStream::class,
        "SIDECAR_DOLBY_VISION_METADATA" => DolbyVisionMetadataIngestInputStream::class,
        "CAPTION_CEA608" => Cea608CaptionInputStream::class,
        "CAPTION_CEA708" => Cea708CaptionInputStream::class,
        "FILE" => FileInputStream::class,
        "DVB_TELETEXT" => DvbTeletextInputStream::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

