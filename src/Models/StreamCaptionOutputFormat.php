<?php

namespace BitmovinApiSdk\Models;

class StreamCaptionOutputFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const WEBVTT = 'WEBVTT';

    /**
     * @param string $value
     * @return StreamCaptionOutputFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Convert SCC captions to WebVTT format
     *
     * @return StreamCaptionOutputFormat
     */
    public static function WEBVTT()
    {
        return new StreamCaptionOutputFormat(self::WEBVTT);
    }
}

