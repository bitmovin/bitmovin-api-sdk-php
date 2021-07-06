<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalDynamicRangeCompressionMode extends \BitmovinApiSdk\Common\Enum
{
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
     * @return DolbyDigitalDynamicRangeCompressionMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * No dynamic range processing preset
     *
     * @return DolbyDigitalDynamicRangeCompressionMode
     */
    public static function NONE()
    {
        return new DolbyDigitalDynamicRangeCompressionMode(self::NONE);
    }

    /**
     * Film standard dynamic range processing preset
     *
     * @return DolbyDigitalDynamicRangeCompressionMode
     */
    public static function FILM_STANDARD()
    {
        return new DolbyDigitalDynamicRangeCompressionMode(self::FILM_STANDARD);
    }

    /**
     * Film light dynamic range processing preset
     *
     * @return DolbyDigitalDynamicRangeCompressionMode
     */
    public static function FILM_LIGHT()
    {
        return new DolbyDigitalDynamicRangeCompressionMode(self::FILM_LIGHT);
    }

    /**
     * Music standard dynamic range processing preset
     *
     * @return DolbyDigitalDynamicRangeCompressionMode
     */
    public static function MUSIC_STANDARD()
    {
        return new DolbyDigitalDynamicRangeCompressionMode(self::MUSIC_STANDARD);
    }

    /**
     * Music light dynamic range processing preset
     *
     * @return DolbyDigitalDynamicRangeCompressionMode
     */
    public static function MUSIC_LIGHT()
    {
        return new DolbyDigitalDynamicRangeCompressionMode(self::MUSIC_LIGHT);
    }

    /**
     * Speech dynamic range processing preset
     *
     * @return DolbyDigitalDynamicRangeCompressionMode
     */
    public static function SPEECH()
    {
        return new DolbyDigitalDynamicRangeCompressionMode(self::SPEECH);
    }
}

