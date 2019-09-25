<?php

namespace BitmovinApiSdk\Models;

class ColorPrimaries extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const UNSPECIFIED = 'UNSPECIFIED';

    /** @var string */
    private const BT709 = 'BT709';

    /** @var string */
    private const BT470M = 'BT470M';

    /** @var string */
    private const BT470BG = 'BT470BG';

    /** @var string */
    private const SMPTE170M = 'SMPTE170M';

    /** @var string */
    private const SMPTE240M = 'SMPTE240M';

    /** @var string */
    private const FILM = 'FILM';

    /** @var string */
    private const BT2020 = 'BT2020';

    /** @var string */
    private const SMPTE428 = 'SMPTE428';

    /** @var string */
    private const SMPTEST428_1 = 'SMPTEST428_1';

    /** @var string */
    private const SMPTE431 = 'SMPTE431';

    /** @var string */
    private const SMPTE432 = 'SMPTE432';

    /** @var string */
    private const JEDEC_P22 = 'JEDEC_P22';

    /**
     * @param string $value
     * @return ColorPrimaries
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * UNSPECIFIED
     *
     * @return ColorPrimaries
     */
    public static function UNSPECIFIED()
    {
        return new ColorPrimaries(self::UNSPECIFIED);
    }

    /**
     * BT709
     *
     * @return ColorPrimaries
     */
    public static function BT709()
    {
        return new ColorPrimaries(self::BT709);
    }

    /**
     * BT470M
     *
     * @return ColorPrimaries
     */
    public static function BT470M()
    {
        return new ColorPrimaries(self::BT470M);
    }

    /**
     * BT470BG
     *
     * @return ColorPrimaries
     */
    public static function BT470BG()
    {
        return new ColorPrimaries(self::BT470BG);
    }

    /**
     * SMPTE170M
     *
     * @return ColorPrimaries
     */
    public static function SMPTE170M()
    {
        return new ColorPrimaries(self::SMPTE170M);
    }

    /**
     * SMPTE240M
     *
     * @return ColorPrimaries
     */
    public static function SMPTE240M()
    {
        return new ColorPrimaries(self::SMPTE240M);
    }

    /**
     * FILM
     *
     * @return ColorPrimaries
     */
    public static function FILM()
    {
        return new ColorPrimaries(self::FILM);
    }

    /**
     * BT2020
     *
     * @return ColorPrimaries
     */
    public static function BT2020()
    {
        return new ColorPrimaries(self::BT2020);
    }

    /**
     * SMPTE428
     *
     * @return ColorPrimaries
     */
    public static function SMPTE428()
    {
        return new ColorPrimaries(self::SMPTE428);
    }

    /**
     * SMPTEST428_1
     *
     * @return ColorPrimaries
     */
    public static function SMPTEST428_1()
    {
        return new ColorPrimaries(self::SMPTEST428_1);
    }

    /**
     * SMPTE431
     *
     * @return ColorPrimaries
     */
    public static function SMPTE431()
    {
        return new ColorPrimaries(self::SMPTE431);
    }

    /**
     * SMPTE432
     *
     * @return ColorPrimaries
     */
    public static function SMPTE432()
    {
        return new ColorPrimaries(self::SMPTE432);
    }

    /**
     * JEDEC_P22
     *
     * @return ColorPrimaries
     */
    public static function JEDEC_P22()
    {
        return new ColorPrimaries(self::JEDEC_P22);
    }
}

