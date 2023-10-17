<?php

namespace BitmovinApiSdk\Models;

class SignupSource extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AWS = 'AWS';

    /** @var string */
    private const AZURE = 'AZURE';

    /** @var string */
    private const BITMOVIN = 'BITMOVIN';

    /** @var string */
    private const GOOGLE = 'GOOGLE';

    /**
     * @param string $value
     * @return SignupSource
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * platform which initiated the creation of the resource
     *
     * @return SignupSource
     */
    public static function AWS()
    {
        return new SignupSource(self::AWS);
    }

    /**
     * platform which initiated the creation of the resource
     *
     * @return SignupSource
     */
    public static function AZURE()
    {
        return new SignupSource(self::AZURE);
    }

    /**
     * platform which initiated the creation of the resource
     *
     * @return SignupSource
     */
    public static function BITMOVIN()
    {
        return new SignupSource(self::BITMOVIN);
    }

    /**
     * platform which initiated the creation of the resource
     *
     * @return SignupSource
     */
    public static function GOOGLE()
    {
        return new SignupSource(self::GOOGLE);
    }
}

