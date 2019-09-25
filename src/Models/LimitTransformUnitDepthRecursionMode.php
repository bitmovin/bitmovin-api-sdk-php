<?php

namespace BitmovinApiSdk\Models;

class LimitTransformUnitDepthRecursionMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const LEVEL_1 = 'LEVEL_1';

    /** @var string */
    private const LEVEL_2 = 'LEVEL_2';

    /** @var string */
    private const LEVEL_3 = 'LEVEL_3';

    /** @var string */
    private const LEVEL_4 = 'LEVEL_4';

    /**
     * @param string $value
     * @return LimitTransformUnitDepthRecursionMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Disable early exit from transform unit dept recursion
     *
     * @return LimitTransformUnitDepthRecursionMode
     */
    public static function DISABLED()
    {
        return new LimitTransformUnitDepthRecursionMode(self::DISABLED);
    }

    /**
     * Decides to recurse to next higher depth based on cost comparison of full size transform unit and split transform unit.
     *
     * @return LimitTransformUnitDepthRecursionMode
     */
    public static function LEVEL_1()
    {
        return new LimitTransformUnitDepthRecursionMode(self::LEVEL_1);
    }

    /**
     * Based on first split sub TUs depth, limits recursion of other split sub TUs.
     *
     * @return LimitTransformUnitDepthRecursionMode
     */
    public static function LEVEL_2()
    {
        return new LimitTransformUnitDepthRecursionMode(self::LEVEL_2);
    }

    /**
     * Based on the average depth of the co-located and the neighbor CUs TU depth, limits recursion of the current CU.
     *
     * @return LimitTransformUnitDepthRecursionMode
     */
    public static function LEVEL_3()
    {
        return new LimitTransformUnitDepthRecursionMode(self::LEVEL_3);
    }

    /**
     * Uses the depth of the co-located CUs TU depth to limit the 1st sub TU depth. The 1st sub TU depth is taken as the limiting depth for the other sub TUs.
     *
     * @return LimitTransformUnitDepthRecursionMode
     */
    public static function LEVEL_4()
    {
        return new LimitTransformUnitDepthRecursionMode(self::LEVEL_4);
    }
}

