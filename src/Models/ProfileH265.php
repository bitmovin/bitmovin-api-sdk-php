<?php

namespace BitmovinApiSdk\Models;

class ProfileH265 extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MAIN = 'main';

    /** @var string */
    private const MAIN10 = 'main10';

    /**
     * @param string $value
     * @return ProfileH265
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Main profile
     *
     * @return ProfileH265
     */
    public static function MAIN()
    {
        return new ProfileH265(self::MAIN);
    }

    /**
     * Main 10 profile
     *
     * @return ProfileH265
     */
    public static function MAIN10()
    {
        return new ProfileH265(self::MAIN10);
    }
}

