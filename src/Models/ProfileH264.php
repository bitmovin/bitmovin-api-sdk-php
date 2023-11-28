<?php

namespace BitmovinApiSdk\Models;

class ProfileH264 extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const BASELINE = 'BASELINE';

    /** @var string */
    private const MAIN = 'MAIN';

    /** @var string */
    private const HIGH = 'HIGH';

    /** @var string */
    private const HIGH422 = 'HIGH422';

    /**
     * @param string $value
     * @return ProfileH264
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Baseline profile
     *
     * @return ProfileH264
     */
    public static function BASELINE()
    {
        return new ProfileH264(self::BASELINE);
    }

    /**
     * Main profile
     *
     * @return ProfileH264
     */
    public static function MAIN()
    {
        return new ProfileH264(self::MAIN);
    }

    /**
     * High profile
     *
     * @return ProfileH264
     */
    public static function HIGH()
    {
        return new ProfileH264(self::HIGH);
    }

    /**
     * High profile 422
     *
     * @return ProfileH264
     */
    public static function HIGH422()
    {
        return new ProfileH264(self::HIGH422);
    }
}

