<?php

namespace BitmovinApiSdk\Models;

class DolbyVisionMetadataSource extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const INPUT_STREAM = 'INPUT_STREAM';

    /** @var string */
    private const EMBEDDED = 'EMBEDDED';

    /**
     * @param string $value
     * @return DolbyVisionMetadataSource
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Dolby Vision Metadata is provided with an external XML file specified by the inputStreamId attribute.
     *
     * @return DolbyVisionMetadataSource
     */
    public static function INPUT_STREAM()
    {
        return new DolbyVisionMetadataSource(self::INPUT_STREAM);
    }

    /**
     * Dolby Vision Metadata is embedded in the input video.
     *
     * @return DolbyVisionMetadataSource
     */
    public static function EMBEDDED()
    {
        return new DolbyVisionMetadataSource(self::EMBEDDED);
    }
}

