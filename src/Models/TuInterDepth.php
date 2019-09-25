<?php

namespace BitmovinApiSdk\Models;

class TuInterDepth extends \BitmovinApiSdk\Common\Enum
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
     * @return TuInterDepth
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Extra recursion depth for intra coded units
     *
     * @return TuInterDepth
     */
    public static function D1()
    {
        return new TuInterDepth(self::D1);
    }

    /**
     * Extra recursion depth for intra coded units
     *
     * @return TuInterDepth
     */
    public static function D2()
    {
        return new TuInterDepth(self::D2);
    }

    /**
     * Extra recursion depth for intra coded units
     *
     * @return TuInterDepth
     */
    public static function D3()
    {
        return new TuInterDepth(self::D3);
    }

    /**
     * Extra recursion depth for intra coded units
     *
     * @return TuInterDepth
     */
    public static function D4()
    {
        return new TuInterDepth(self::D4);
    }
}

