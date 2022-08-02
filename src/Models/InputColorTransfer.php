<?php

namespace BitmovinApiSdk\Models;

class InputColorTransfer extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const UNSPECIFIED = 'UNSPECIFIED';

    /** @var string */
    private const BT709 = 'BT709';

    /** @var string */
    private const GAMMA22 = 'GAMMA22';

    /** @var string */
    private const GAMMA28 = 'GAMMA28';

    /** @var string */
    private const SMPTE170M = 'SMPTE170M';

    /** @var string */
    private const SMPTE240M = 'SMPTE240M';

    /** @var string */
    private const LINEAR = 'LINEAR';

    /** @var string */
    private const LOG = 'LOG';

    /** @var string */
    private const LOG_SQRT = 'LOG_SQRT';

    /** @var string */
    private const IEC61966_2_4 = 'IEC61966_2_4';

    /** @var string */
    private const BT1361_ECG = 'BT1361_ECG';

    /** @var string */
    private const IEC61966_2_1 = 'IEC61966_2_1';

    /** @var string */
    private const BT2020_10 = 'BT2020_10';

    /** @var string */
    private const BT2020_12 = 'BT2020_12';

    /** @var string */
    private const SMPTE2084 = 'SMPTE2084';

    /** @var string */
    private const SMPTE428 = 'SMPTE428';

    /** @var string */
    private const ARIB_STD_B67 = 'ARIB_STD_B67';

    /**
     * @param string $value
     * @return InputColorTransfer
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * UNSPECIFIED
     *
     * @return InputColorTransfer
     */
    public static function UNSPECIFIED()
    {
        return new InputColorTransfer(self::UNSPECIFIED);
    }

    /**
     * BT709
     *
     * @return InputColorTransfer
     */
    public static function BT709()
    {
        return new InputColorTransfer(self::BT709);
    }

    /**
     * GAMMA22
     *
     * @return InputColorTransfer
     */
    public static function GAMMA22()
    {
        return new InputColorTransfer(self::GAMMA22);
    }

    /**
     * GAMMA28
     *
     * @return InputColorTransfer
     */
    public static function GAMMA28()
    {
        return new InputColorTransfer(self::GAMMA28);
    }

    /**
     * SMPTE170M
     *
     * @return InputColorTransfer
     */
    public static function SMPTE170M()
    {
        return new InputColorTransfer(self::SMPTE170M);
    }

    /**
     * SMPTE240M
     *
     * @return InputColorTransfer
     */
    public static function SMPTE240M()
    {
        return new InputColorTransfer(self::SMPTE240M);
    }

    /**
     * LINEAR
     *
     * @return InputColorTransfer
     */
    public static function LINEAR()
    {
        return new InputColorTransfer(self::LINEAR);
    }

    /**
     * LOG
     *
     * @return InputColorTransfer
     */
    public static function LOG()
    {
        return new InputColorTransfer(self::LOG);
    }

    /**
     * LOG_SQRT
     *
     * @return InputColorTransfer
     */
    public static function LOG_SQRT()
    {
        return new InputColorTransfer(self::LOG_SQRT);
    }

    /**
     * IEC61966_2_4
     *
     * @return InputColorTransfer
     */
    public static function IEC61966_2_4()
    {
        return new InputColorTransfer(self::IEC61966_2_4);
    }

    /**
     * BT1361_ECG
     *
     * @return InputColorTransfer
     */
    public static function BT1361_ECG()
    {
        return new InputColorTransfer(self::BT1361_ECG);
    }

    /**
     * IEC61966_2_1
     *
     * @return InputColorTransfer
     */
    public static function IEC61966_2_1()
    {
        return new InputColorTransfer(self::IEC61966_2_1);
    }

    /**
     * BT2020_10
     *
     * @return InputColorTransfer
     */
    public static function BT2020_10()
    {
        return new InputColorTransfer(self::BT2020_10);
    }

    /**
     * BT2020_12
     *
     * @return InputColorTransfer
     */
    public static function BT2020_12()
    {
        return new InputColorTransfer(self::BT2020_12);
    }

    /**
     * SMPTE2084
     *
     * @return InputColorTransfer
     */
    public static function SMPTE2084()
    {
        return new InputColorTransfer(self::SMPTE2084);
    }

    /**
     * SMPTE428
     *
     * @return InputColorTransfer
     */
    public static function SMPTE428()
    {
        return new InputColorTransfer(self::SMPTE428);
    }

    /**
     * ARIB_STD_B67
     *
     * @return InputColorTransfer
     */
    public static function ARIB_STD_B67()
    {
        return new InputColorTransfer(self::ARIB_STD_B67);
    }
}

