<?php

namespace BitmovinApiSdk\Models;

class SrtMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const LISTENER = 'LISTENER';

    /** @var string */
    private const CALLER = 'CALLER';

    /**
     * @param string $value
     * @return SrtMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * LISTENER
     *
     * @return SrtMode
     */
    public static function LISTENER()
    {
        return new SrtMode(self::LISTENER);
    }

    /**
     * CALLER
     *
     * @return SrtMode
     */
    public static function CALLER()
    {
        return new SrtMode(self::CALLER);
    }
}

