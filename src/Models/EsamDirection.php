<?php

namespace BitmovinApiSdk\Models;

class EsamDirection extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const OUT = 'OUT';

    /** @var string */
    private const IN = 'IN';

    /** @var string */
    private const BOTH = 'BOTH';

    /**
     * @param string $value
     * @return EsamDirection
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Condition as an out-point only (splice out)
     *
     * @return EsamDirection
     */
    public static function OUT()
    {
        return new EsamDirection(self::OUT);
    }

    /**
     * Condition as an in-point only (splice in)
     *
     * @return EsamDirection
     */
    public static function IN()
    {
        return new EsamDirection(self::IN);
    }

    /**
     * Condition for either in or out
     *
     * @return EsamDirection
     */
    public static function BOTH()
    {
        return new EsamDirection(self::BOTH);
    }
}

