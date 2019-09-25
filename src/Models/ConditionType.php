<?php

namespace BitmovinApiSdk\Models;

class ConditionType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CONDITION = 'CONDITION';

    /** @var string */
    private const _AND = 'AND';

    /** @var string */
    private const _OR = 'OR';

    /**
     * @param string $value
     * @return ConditionType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Type of the condition
     *
     * @return ConditionType
     */
    public static function CONDITION()
    {
        return new ConditionType(self::CONDITION);
    }

    /**
     * Type of the condition
     *
     * @return ConditionType
     */
    public static function _AND()
    {
        return new ConditionType(self::_AND);
    }

    /**
     * Type of the condition
     *
     * @return ConditionType
     */
    public static function _OR()
    {
        return new ConditionType(self::_OR);
    }
}

