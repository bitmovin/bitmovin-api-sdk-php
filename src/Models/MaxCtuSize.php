<?php

namespace BitmovinApiSdk\Models;

class MaxCtuSize extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const S16 = '16';

    /** @var string */
    private const S32 = '32';

    /** @var string */
    private const S64 = '64';

    /**
     * @param string $value
     * @return MaxCtuSize
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Set the maximal CTU (Coding Tree Unit) size
     *
     * @return MaxCtuSize
     */
    public static function S16()
    {
        return new MaxCtuSize(self::S16);
    }

    /**
     * Set the maximal CTU (Coding Tree Unit) size
     *
     * @return MaxCtuSize
     */
    public static function S32()
    {
        return new MaxCtuSize(self::S32);
    }

    /**
     * Set the maximal CTU (Coding Tree Unit) size
     *
     * @return MaxCtuSize
     */
    public static function S64()
    {
        return new MaxCtuSize(self::S64);
    }
}

