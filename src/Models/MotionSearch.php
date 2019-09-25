<?php

namespace BitmovinApiSdk\Models;

class MotionSearch extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DIA = 'DIA';

    /** @var string */
    private const HEX = 'HEX';

    /** @var string */
    private const UMH = 'UMH';

    /** @var string */
    private const STAR = 'STAR';

    /** @var string */
    private const FULL = 'FULL';

    /**
     * @param string $value
     * @return MotionSearch
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Set the Motion search method
     *
     * @return MotionSearch
     */
    public static function DIA()
    {
        return new MotionSearch(self::DIA);
    }

    /**
     * Set the Motion search method
     *
     * @return MotionSearch
     */
    public static function HEX()
    {
        return new MotionSearch(self::HEX);
    }

    /**
     * Set the Motion search method
     *
     * @return MotionSearch
     */
    public static function UMH()
    {
        return new MotionSearch(self::UMH);
    }

    /**
     * Set the Motion search method
     *
     * @return MotionSearch
     */
    public static function STAR()
    {
        return new MotionSearch(self::STAR);
    }

    /**
     * Set the Motion search method
     *
     * @return MotionSearch
     */
    public static function FULL()
    {
        return new MotionSearch(self::FULL);
    }
}

