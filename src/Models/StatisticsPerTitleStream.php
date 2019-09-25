<?php

namespace BitmovinApiSdk\Models;

class StatisticsPerTitleStream extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const ENABLED = 'ENABLED';

    /**
     * @param string $value
     * @return StatisticsPerTitleStream
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * DISABLED
     *
     * @return StatisticsPerTitleStream
     */
    public static function DISABLED()
    {
        return new StatisticsPerTitleStream(self::DISABLED);
    }

    /**
     * ENABLED
     *
     * @return StatisticsPerTitleStream
     */
    public static function ENABLED()
    {
        return new StatisticsPerTitleStream(self::ENABLED);
    }
}

