<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingLiveInputAspectRatio extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const WIDE_16_9 = 'WIDE_16_9';

    /** @var string */
    private const WIDE_16_10 = 'WIDE_16_10';

    /** @var string */
    private const VERTICAL_9_16 = 'VERTICAL_9_16';

    /** @var string */
    private const STANDARD_4_3 = 'STANDARD_4_3';

    /** @var string */
    private const ULTRA_WIDE_21_9 = 'ULTRA_WIDE_21_9';

    /**
     * @param string $value
     * @return SimpleEncodingLiveInputAspectRatio
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Widescreen 16:9 aspect ratio
     *
     * @return SimpleEncodingLiveInputAspectRatio
     */
    public static function WIDE_16_9()
    {
        return new SimpleEncodingLiveInputAspectRatio(self::WIDE_16_9);
    }

    /**
     * Widescreen 16:10 aspect ratio
     *
     * @return SimpleEncodingLiveInputAspectRatio
     */
    public static function WIDE_16_10()
    {
        return new SimpleEncodingLiveInputAspectRatio(self::WIDE_16_10);
    }

    /**
     * Vertical 9:16 aspect ratio. Also known as portrait mode
     *
     * @return SimpleEncodingLiveInputAspectRatio
     */
    public static function VERTICAL_9_16()
    {
        return new SimpleEncodingLiveInputAspectRatio(self::VERTICAL_9_16);
    }

    /**
     * Standard 4:3 aspect ratio
     *
     * @return SimpleEncodingLiveInputAspectRatio
     */
    public static function STANDARD_4_3()
    {
        return new SimpleEncodingLiveInputAspectRatio(self::STANDARD_4_3);
    }

    /**
     * Ultrawide 21:9 aspect ratio
     *
     * @return SimpleEncodingLiveInputAspectRatio
     */
    public static function ULTRA_WIDE_21_9()
    {
        return new SimpleEncodingLiveInputAspectRatio(self::ULTRA_WIDE_21_9);
    }
}

