<?php

namespace BitmovinApiSdk\Models;

class StreamKeyConfigurationType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const GENERATE = 'GENERATE';

    /** @var string */
    private const ASSIGN = 'ASSIGN';

    /**
     * @param string $value
     * @return StreamKeyConfigurationType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * A temporary stream key with a random 20 characters string will be generated
     *
     * @return StreamKeyConfigurationType
     */
    public static function GENERATE()
    {
        return new StreamKeyConfigurationType(self::GENERATE);
    }

    /**
     * A previously generated reserved stream key will be assigned
     *
     * @return StreamKeyConfigurationType
     */
    public static function ASSIGN()
    {
        return new StreamKeyConfigurationType(self::ASSIGN);
    }
}

