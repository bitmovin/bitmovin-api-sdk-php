<?php

namespace BitmovinApiSdk\Models;

class Marketplace extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AWS = 'AWS';

    /** @var string */
    private const AZURE = 'AZURE';

    /**
     * @param string $value
     * @return Marketplace
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * AWS marketplace
     *
     * @return Marketplace
     */
    public static function AWS()
    {
        return new Marketplace(self::AWS);
    }

    /**
     * Azure marketplace
     *
     * @return Marketplace
     */
    public static function AZURE()
    {
        return new Marketplace(self::AZURE);
    }
}

