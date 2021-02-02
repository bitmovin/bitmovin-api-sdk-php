<?php

namespace BitmovinApiSdk\Models;

class NexGuardWatermarkingStrength extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const LIGHTEST = 'LIGHTEST';

    /** @var string */
    private const LIGHTER = 'LIGHTER';

    /** @var string */
    private const DEFAULT = 'DEFAULT';

    /** @var string */
    private const STRONGER = 'STRONGER';

    /** @var string */
    private const STRONGEST = 'STRONGEST';

    /**
     * @param string $value
     * @return NexGuardWatermarkingStrength
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * LIGHTEST
     *
     * @return NexGuardWatermarkingStrength
     */
    public static function LIGHTEST()
    {
        return new NexGuardWatermarkingStrength(self::LIGHTEST);
    }

    /**
     * LIGHTER
     *
     * @return NexGuardWatermarkingStrength
     */
    public static function LIGHTER()
    {
        return new NexGuardWatermarkingStrength(self::LIGHTER);
    }

    /**
     * DEFAULT
     *
     * @return NexGuardWatermarkingStrength
     */
    public static function DEFAULT()
    {
        return new NexGuardWatermarkingStrength(self::DEFAULT);
    }

    /**
     * STRONGER
     *
     * @return NexGuardWatermarkingStrength
     */
    public static function STRONGER()
    {
        return new NexGuardWatermarkingStrength(self::STRONGER);
    }

    /**
     * STRONGEST
     *
     * @return NexGuardWatermarkingStrength
     */
    public static function STRONGEST()
    {
        return new NexGuardWatermarkingStrength(self::STRONGEST);
    }
}

