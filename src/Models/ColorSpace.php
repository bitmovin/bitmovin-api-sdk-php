<?php

namespace BitmovinApiSdk\Models;

class ColorSpace extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const UNSPECIFIED = 'UNSPECIFIED';

    /** @var string */
    private const RGB = 'RGB';

    /** @var string */
    private const BT709 = 'BT709';

    /** @var string */
    private const FCC = 'FCC';

    /** @var string */
    private const BT470BG = 'BT470BG';

    /** @var string */
    private const SMPTE170M = 'SMPTE170M';

    /** @var string */
    private const SMPTE240M = 'SMPTE240M';

    /** @var string */
    private const YCGCO = 'YCGCO';

    /** @var string */
    private const YCOCG = 'YCOCG';

    /** @var string */
    private const BT2020_NCL = 'BT2020_NCL';

    /** @var string */
    private const BT2020_CL = 'BT2020_CL';

    /** @var string */
    private const SMPTE2085 = 'SMPTE2085';

    /**
     * @param string $value
     * @return ColorSpace
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The color space to be applied
     *
     * @return ColorSpace
     */
    public static function UNSPECIFIED()
    {
        return new ColorSpace(self::UNSPECIFIED);
    }

    /**
     * The color space to be applied
     *
     * @return ColorSpace
     */
    public static function RGB()
    {
        return new ColorSpace(self::RGB);
    }

    /**
     * The color space to be applied
     *
     * @return ColorSpace
     */
    public static function BT709()
    {
        return new ColorSpace(self::BT709);
    }

    /**
     * The color space to be applied
     *
     * @return ColorSpace
     */
    public static function FCC()
    {
        return new ColorSpace(self::FCC);
    }

    /**
     * The color space to be applied
     *
     * @return ColorSpace
     */
    public static function BT470BG()
    {
        return new ColorSpace(self::BT470BG);
    }

    /**
     * The color space to be applied
     *
     * @return ColorSpace
     */
    public static function SMPTE170M()
    {
        return new ColorSpace(self::SMPTE170M);
    }

    /**
     * The color space to be applied
     *
     * @return ColorSpace
     */
    public static function SMPTE240M()
    {
        return new ColorSpace(self::SMPTE240M);
    }

    /**
     * The color space to be applied
     *
     * @return ColorSpace
     */
    public static function YCGCO()
    {
        return new ColorSpace(self::YCGCO);
    }

    /**
     * The color space to be applied
     *
     * @return ColorSpace
     */
    public static function YCOCG()
    {
        return new ColorSpace(self::YCOCG);
    }

    /**
     * The color space to be applied
     *
     * @return ColorSpace
     */
    public static function BT2020_NCL()
    {
        return new ColorSpace(self::BT2020_NCL);
    }

    /**
     * The color space to be applied
     *
     * @return ColorSpace
     */
    public static function BT2020_CL()
    {
        return new ColorSpace(self::BT2020_CL);
    }

    /**
     * The color space to be applied
     *
     * @return ColorSpace
     */
    public static function SMPTE2085()
    {
        return new ColorSpace(self::SMPTE2085);
    }
}

