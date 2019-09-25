<?php

namespace BitmovinApiSdk\Models;

class ConditionOperator extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const EQUAL = '==';

    /** @var string */
    private const NOT_EQUAL = '!=';

    /** @var string */
    private const LESS_THAN_OR_EQUAL = '<=';

    /** @var string */
    private const LESS_THAN = '<';

    /** @var string */
    private const GREATER_THAN = '>';

    /** @var string */
    private const GREATER_THAN_OR_EQUAL = '>=';

    /**
     * @param string $value
     * @return ConditionOperator
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Equal
     *
     * @return ConditionOperator
     */
    public static function EQUAL()
    {
        return new ConditionOperator(self::EQUAL);
    }

    /**
     * Not equal
     *
     * @return ConditionOperator
     */
    public static function NOT_EQUAL()
    {
        return new ConditionOperator(self::NOT_EQUAL);
    }

    /**
     * Less than or equal
     *
     * @return ConditionOperator
     */
    public static function LESS_THAN_OR_EQUAL()
    {
        return new ConditionOperator(self::LESS_THAN_OR_EQUAL);
    }

    /**
     * Less then
     *
     * @return ConditionOperator
     */
    public static function LESS_THAN()
    {
        return new ConditionOperator(self::LESS_THAN);
    }

    /**
     * Greater than
     *
     * @return ConditionOperator
     */
    public static function GREATER_THAN()
    {
        return new ConditionOperator(self::GREATER_THAN);
    }

    /**
     * Greater than or equal
     *
     * @return ConditionOperator
     */
    public static function GREATER_THAN_OR_EQUAL()
    {
        return new ConditionOperator(self::GREATER_THAN_OR_EQUAL);
    }
}

