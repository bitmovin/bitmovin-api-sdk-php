<?php

namespace BitmovinApiSdk\Models;

class Vp9Quality extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const REALTIME = 'REALTIME';

    /** @var string */
    private const GOOD = 'GOOD';

    /** @var string */
    private const BEST = 'BEST';

    /**
     * @param string $value
     * @return Vp9Quality
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Determines quality for the price of speed.
     *
     * @return Vp9Quality
     */
    public static function REALTIME()
    {
        return new Vp9Quality(self::REALTIME);
    }

    /**
     * Determines quality for the price of speed.
     *
     * @return Vp9Quality
     */
    public static function GOOD()
    {
        return new Vp9Quality(self::GOOD);
    }

    /**
     * Determines quality for the price of speed.
     *
     * @return Vp9Quality
     */
    public static function BEST()
    {
        return new Vp9Quality(self::BEST);
    }
}

