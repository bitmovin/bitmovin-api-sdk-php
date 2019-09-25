<?php

namespace BitmovinApiSdk\Models;

class HlsVersion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const HLS_V3 = '3';

    /** @var string */
    private const HLS_V4 = '4';

    /** @var string */
    private const HLS_V5 = '5';

    /** @var string */
    private const HLS_V6 = '6';

    /** @var string */
    private const HLS_V7 = '7';

    /** @var string */
    private const HLS_V8 = '8';

    /**
     * @param string $value
     * @return HlsVersion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * HLS version 3
     *
     * @return HlsVersion
     */
    public static function HLS_V3()
    {
        return new HlsVersion(self::HLS_V3);
    }

    /**
     * HLS version 4
     *
     * @return HlsVersion
     */
    public static function HLS_V4()
    {
        return new HlsVersion(self::HLS_V4);
    }

    /**
     * HLS version 5
     *
     * @return HlsVersion
     */
    public static function HLS_V5()
    {
        return new HlsVersion(self::HLS_V5);
    }

    /**
     * HLS version 6
     *
     * @return HlsVersion
     */
    public static function HLS_V6()
    {
        return new HlsVersion(self::HLS_V6);
    }

    /**
     * HLS version 7
     *
     * @return HlsVersion
     */
    public static function HLS_V7()
    {
        return new HlsVersion(self::HLS_V7);
    }

    /**
     * HLS version 8
     *
     * @return HlsVersion
     */
    public static function HLS_V8()
    {
        return new HlsVersion(self::HLS_V8);
    }
}

