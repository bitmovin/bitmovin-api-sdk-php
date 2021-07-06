<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalPlusDynamicRangeCompressionMode extends \BitmovinApiSdk\Common\Enum
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
     * @return DolbyDigitalPlusDynamicRangeCompressionMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * No dynamic range processing preset
     *
     * @return DolbyDigitalPlusDynamicRangeCompressionMode
     */
    public static function NONE()
    {
        return new DolbyDigitalPlusDynamicRangeCompressionMode(self::NONE);
    }

    /**
     * Film standard dynamic range processing preset
     *
     * @return DolbyDigitalPlusDynamicRangeCompressionMode
     */
    public static function FILM_STANDARD()
    {
        return new DolbyDigitalPlusDynamicRangeCompressionMode(self::FILM_STANDARD);
    }

    /**
     * Film light dynamic range processing preset
     *
     * @return DolbyDigitalPlusDynamicRangeCompressionMode
     */
    public static function FILM_LIGHT()
    {
        return new DolbyDigitalPlusDynamicRangeCompressionMode(self::FILM_LIGHT);
    }

    /**
     * Music standard dynamic range processing preset
     *
     * @return DolbyDigitalPlusDynamicRangeCompressionMode
     */
    public static function MUSIC_STANDARD()
    {
        return new DolbyDigitalPlusDynamicRangeCompressionMode(self::MUSIC_STANDARD);
    }

    /**
     * Music light dynamic range processing preset
     *
     * @return DolbyDigitalPlusDynamicRangeCompressionMode
     */
    public static function MUSIC_LIGHT()
    {
        return new DolbyDigitalPlusDynamicRangeCompressionMode(self::MUSIC_LIGHT);
    }

    /**
     * Speech dynamic range processing preset
     *
     * @return DolbyDigitalPlusDynamicRangeCompressionMode
     */
    public static function SPEECH()
    {
        return new DolbyDigitalPlusDynamicRangeCompressionMode(self::SPEECH);
    }
}

