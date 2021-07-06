<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CodecConfiguration extends BitmovinResource
{
    public static $discriminatorName = "type";
    public static $discriminatorMapping = [
        "AAC" => AacAudioConfiguration::class,
        "DTS_PASSTHROUGH" => DtsPassthroughAudioConfiguration::class,
        "DVB_SUBTITLE" => DvbSubtitleConfiguration::class,
        "HE_AAC_V1" => HeAacV1AudioConfiguration::class,
        "HE_AAC_V2" => HeAacV2AudioConfiguration::class,
        "H264" => H264VideoConfiguration::class,
        "H265" => H265VideoConfiguration::class,
        "VP9" => Vp9VideoConfiguration::class,
        "VP8" => Vp8VideoConfiguration::class,
        "MP2" => Mp2AudioConfiguration::class,
        "MP3" => Mp3AudioConfiguration::class,
        "AC3" => Ac3AudioConfiguration::class,
        "DD" => DolbyDigitalAudioConfiguration::class,
        "EAC3" => Eac3AudioConfiguration::class,
        "DDPLUS" => DolbyDigitalPlusAudioConfiguration::class,
        "OPUS" => OpusAudioConfiguration::class,
        "VORBIS" => VorbisAudioConfiguration::class,
        "MJPEG" => MjpegVideoConfiguration::class,
        "AV1" => Av1VideoConfiguration::class,
        "DOLBY_ATMOS" => DolbyAtmosAudioConfiguration::class,
        "H262" => H262VideoConfiguration::class,
        "PCM" => PcmAudioConfiguration::class,
        "WEBVTT" => WebVttConfiguration::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

