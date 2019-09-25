<?php

namespace BitmovinApiSdk\Models;

class AnalyticsQueryOperator extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const IN = 'IN';

    /** @var string */
    private const EQ = 'EQ';

    /** @var string */
    private const NE = 'NE';

    /** @var string */
    private const LT = 'LT';

    /** @var string */
    private const LTE = 'LTE';

    /** @var string */
    private const GT = 'GT';

    /** @var string */
    private const GTE = 'GTE';

    /** @var string */
    private const CONTAINS = 'CONTAINS';

    /** @var string */
    private const NOTCONTAINS = 'NOTCONTAINS';

    /**
     * @param string $value
     * @return AnalyticsQueryOperator
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * IN
     *
     * @return AnalyticsQueryOperator
     */
    public static function IN()
    {
        return new AnalyticsQueryOperator(self::IN);
    }

    /**
     * EQ
     *
     * @return AnalyticsQueryOperator
     */
    public static function EQ()
    {
        return new AnalyticsQueryOperator(self::EQ);
    }

    /**
     * NE
     *
     * @return AnalyticsQueryOperator
     */
    public static function NE()
    {
        return new AnalyticsQueryOperator(self::NE);
    }

    /**
     * LT
     *
     * @return AnalyticsQueryOperator
     */
    public static function LT()
    {
        return new AnalyticsQueryOperator(self::LT);
    }

    /**
     * LTE
     *
     * @return AnalyticsQueryOperator
     */
    public static function LTE()
    {
        return new AnalyticsQueryOperator(self::LTE);
    }

    /**
     * GT
     *
     * @return AnalyticsQueryOperator
     */
    public static function GT()
    {
        return new AnalyticsQueryOperator(self::GT);
    }

    /**
     * GTE
     *
     * @return AnalyticsQueryOperator
     */
    public static function GTE()
    {
        return new AnalyticsQueryOperator(self::GTE);
    }

    /**
     * CONTAINS
     *
     * @return AnalyticsQueryOperator
     */
    public static function CONTAINS()
    {
        return new AnalyticsQueryOperator(self::CONTAINS);
    }

    /**
     * NOTCONTAINS
     *
     * @return AnalyticsQueryOperator
     */
    public static function NOTCONTAINS()
    {
        return new AnalyticsQueryOperator(self::NOTCONTAINS);
    }
}

