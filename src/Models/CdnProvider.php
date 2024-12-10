<?php

namespace BitmovinApiSdk\Models;

class CdnProvider extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AKAMAI = 'AKAMAI';

    /** @var string */
    private const AWS = 'AWS';

    /**
     * @param string $value
     * @return CdnProvider
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * AKAMAI
     *
     * @return CdnProvider
     */
    public static function AKAMAI()
    {
        return new CdnProvider(self::AKAMAI);
    }

    /**
     * AWS
     *
     * @return CdnProvider
     */
    public static function AWS()
    {
        return new CdnProvider(self::AWS);
    }
}

