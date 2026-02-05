<?php

namespace BitmovinApiSdk\Models;

class DolbyAtmosDynamicRangeCompressionMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AUTO = 'AUTO';

    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const FILM_STANDARD = 'FILM_STANDARD';

    /** @var string */
    private const FILM_LIGHT = 'FILM_LIGHT';

    /** @var string */
    private const MUSIC_STANDARD = 'MUSIC_STANDARD';

    /** @var string */
    private const MUSIC_LIGHT = 'MUSIC_LIGHT';

    /** @var string */
    private const SPEECH = 'SPEECH';

    /**
     * @param string $value
     * @return DolbyAtmosDynamicRangeCompressionMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Film light dynamic range preset except DRC modes are provided as part of Dolby Atmos metadata inside ADM inputs
     *
     * @return DolbyAtmosDynamicRangeCompressionMode
     */
    public static function AUTO()
    {
        return new DolbyAtmosDynamicRangeCompressionMode(self::AUTO);
    }

    /**
     * No dynamic range processing preset
     *
     * @return DolbyAtmosDynamicRangeCompressionMode
     */
    public static function NONE()
    {
        return new DolbyAtmosDynamicRangeCompressionMode(self::NONE);
    }

    /**
     * Film standard dynamic range processing preset
     *
     * @return DolbyAtmosDynamicRangeCompressionMode
     */
    public static function FILM_STANDARD()
    {
        return new DolbyAtmosDynamicRangeCompressionMode(self::FILM_STANDARD);
    }

    /**
     * Film light dynamic range processing preset
     *
     * @return DolbyAtmosDynamicRangeCompressionMode
     */
    public static function FILM_LIGHT()
    {
        return new DolbyAtmosDynamicRangeCompressionMode(self::FILM_LIGHT);
    }

    /**
     * Music standard dynamic range processing preset
     *
     * @return DolbyAtmosDynamicRangeCompressionMode
     */
    public static function MUSIC_STANDARD()
    {
        return new DolbyAtmosDynamicRangeCompressionMode(self::MUSIC_STANDARD);
    }

    /**
     * Music light dynamic range processing preset
     *
     * @return DolbyAtmosDynamicRangeCompressionMode
     */
    public static function MUSIC_LIGHT()
    {
        return new DolbyAtmosDynamicRangeCompressionMode(self::MUSIC_LIGHT);
    }

    /**
     * Speech dynamic range processing preset
     *
     * @return DolbyAtmosDynamicRangeCompressionMode
     */
    public static function SPEECH()
    {
        return new DolbyAtmosDynamicRangeCompressionMode(self::SPEECH);
    }
}

