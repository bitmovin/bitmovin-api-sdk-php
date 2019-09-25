<?php

namespace BitmovinApiSdk\Models;

class InputColorSpace extends \BitmovinApiSdk\Common\Enum
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
     * @return InputColorSpace
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @return InputColorSpace
     */
    public static function UNSPECIFIED()
    {
        return new InputColorSpace(self::UNSPECIFIED);
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @return InputColorSpace
     */
    public static function RGB()
    {
        return new InputColorSpace(self::RGB);
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @return InputColorSpace
     */
    public static function BT709()
    {
        return new InputColorSpace(self::BT709);
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @return InputColorSpace
     */
    public static function FCC()
    {
        return new InputColorSpace(self::FCC);
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @return InputColorSpace
     */
    public static function BT470BG()
    {
        return new InputColorSpace(self::BT470BG);
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @return InputColorSpace
     */
    public static function SMPTE170M()
    {
        return new InputColorSpace(self::SMPTE170M);
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @return InputColorSpace
     */
    public static function SMPTE240M()
    {
        return new InputColorSpace(self::SMPTE240M);
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @return InputColorSpace
     */
    public static function YCGCO()
    {
        return new InputColorSpace(self::YCGCO);
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @return InputColorSpace
     */
    public static function YCOCG()
    {
        return new InputColorSpace(self::YCOCG);
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @return InputColorSpace
     */
    public static function BT2020_NCL()
    {
        return new InputColorSpace(self::BT2020_NCL);
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @return InputColorSpace
     */
    public static function BT2020_CL()
    {
        return new InputColorSpace(self::BT2020_CL);
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @return InputColorSpace
     */
    public static function SMPTE2085()
    {
        return new InputColorSpace(self::SMPTE2085);
    }
}

