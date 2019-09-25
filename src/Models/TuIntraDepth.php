<?php

namespace BitmovinApiSdk\Models;

class TuIntraDepth extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const D1 = '1';

    /** @var string */
    private const D2 = '2';

    /** @var string */
    private const D3 = '3';

    /** @var string */
    private const D4 = '4';

    /**
     * @param string $value
     * @return TuIntraDepth
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Extra recursion depth for inter coded units
     *
     * @return TuIntraDepth
     */
    public static function D1()
    {
        return new TuIntraDepth(self::D1);
    }

    /**
     * Extra recursion depth for inter coded units
     *
     * @return TuIntraDepth
     */
    public static function D2()
    {
        return new TuIntraDepth(self::D2);
    }

    /**
     * Extra recursion depth for inter coded units
     *
     * @return TuIntraDepth
     */
    public static function D3()
    {
        return new TuIntraDepth(self::D3);
    }

    /**
     * Extra recursion depth for inter coded units
     *
     * @return TuIntraDepth
     */
    public static function D4()
    {
        return new TuIntraDepth(self::D4);
    }
}

