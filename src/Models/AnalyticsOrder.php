<?php

namespace BitmovinApiSdk\Models;

class AnalyticsOrder extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ASC = 'ASC';

    /** @var string */
    private const DESC = 'DESC';

    /**
     * @param string $value
     * @return AnalyticsOrder
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * ASC
     *
     * @return AnalyticsOrder
     */
    public static function ASC()
    {
        return new AnalyticsOrder(self::ASC);
    }

    /**
     * DESC
     *
     * @return AnalyticsOrder
     */
    public static function DESC()
    {
        return new AnalyticsOrder(self::DESC);
    }
}

