<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Filter extends BitmovinResource
{
    public static $discriminatorName = "type";
    public static $discriminatorMapping = [
        "CROP" => CropFilter::class,
        "CONFORM" => ConformFilter::class,
        "WATERMARK" => WatermarkFilter::class,
        "ENHANCED_WATERMARK" => EnhancedWatermarkFilter::class,
        "ROTATE" => RotateFilter::class,
        "DEINTERLACE" => DeinterlaceFilter::class,
        "ENHANCED_DEINTERLACE" => EnhancedDeinterlaceFilter::class,
        "AUDIO_MIX" => AudioMixFilter::class,
        "DENOISE_HQDN3D" => DenoiseHqdn3dFilter::class,
        "TEXT" => TextFilter::class,
        "UNSHARP" => UnsharpFilter::class,
        "SCALE" => ScaleFilter::class,
        "INTERLACE" => InterlaceFilter::class,
        "AUDIO_VOLUME" => AudioVolumeFilter::class,
        "EBU_R128_SINGLE_PASS" => EbuR128SinglePassFilter::class,
        "AZURE_SPEECH_TO_CAPTIONS" => AzureSpeechToCaptionsFilter::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

