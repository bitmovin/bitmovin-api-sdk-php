<?php

namespace BitmovinApiSdk\Models;

class InputColorPrimaries extends \BitmovinApiSdk\Common\Enum
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
     * @return InputColorPrimaries
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * UNSPECIFIED
     *
     * @return InputColorPrimaries
     */
    public static function UNSPECIFIED()
    {
        return new InputColorPrimaries(self::UNSPECIFIED);
    }

    /**
     * BT709
     *
     * @return InputColorPrimaries
     */
    public static function BT709()
    {
        return new InputColorPrimaries(self::BT709);
    }

    /**
     * BT470M
     *
     * @return InputColorPrimaries
     */
    public static function BT470M()
    {
        return new InputColorPrimaries(self::BT470M);
    }

    /**
     * BT470BG
     *
     * @return InputColorPrimaries
     */
    public static function BT470BG()
    {
        return new InputColorPrimaries(self::BT470BG);
    }

    /**
     * SMPTE170M
     *
     * @return InputColorPrimaries
     */
    public static function SMPTE170M()
    {
        return new InputColorPrimaries(self::SMPTE170M);
    }

    /**
     * SMPTE240M
     *
     * @return InputColorPrimaries
     */
    public static function SMPTE240M()
    {
        return new InputColorPrimaries(self::SMPTE240M);
    }

    /**
     * FILM
     *
     * @return InputColorPrimaries
     */
    public static function FILM()
    {
        return new InputColorPrimaries(self::FILM);
    }

    /**
     * BT2020
     *
     * @return InputColorPrimaries
     */
    public static function BT2020()
    {
        return new InputColorPrimaries(self::BT2020);
    }

    /**
     * SMPTE428
     *
     * @return InputColorPrimaries
     */
    public static function SMPTE428()
    {
        return new InputColorPrimaries(self::SMPTE428);
    }

    /**
     * SMPTEST428_1
     *
     * @return InputColorPrimaries
     */
    public static function SMPTEST428_1()
    {
        return new InputColorPrimaries(self::SMPTEST428_1);
    }

    /**
     * SMPTE431
     *
     * @return InputColorPrimaries
     */
    public static function SMPTE431()
    {
        return new InputColorPrimaries(self::SMPTE431);
    }

    /**
     * SMPTE432
     *
     * @return InputColorPrimaries
     */
    public static function SMPTE432()
    {
        return new InputColorPrimaries(self::SMPTE432);
    }

    /**
     * JEDEC_P22
     *
     * @return InputColorPrimaries
     */
    public static function JEDEC_P22()
    {
        return new InputColorPrimaries(self::JEDEC_P22);
    }
}

