<?php

namespace BitmovinApiSdk\Models;

class ResourceType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ACCOUNT = 'account';

    /** @var string */
    private const ENCODING = 'encoding';

    /** @var string */
    private const PLAYER = 'player';

    /** @var string */
    private const ANALYTICS = 'analytics';

    /**
     * @param string $value
     * @return ResourceType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * ACCOUNT
     *
     * @return ResourceType
     */
    public static function ACCOUNT()
    {
        return new ResourceType(self::ACCOUNT);
    }

    /**
     * ENCODING
     *
     * @return ResourceType
     */
    public static function ENCODING()
    {
        return new ResourceType(self::ENCODING);
    }

    /**
     * PLAYER
     *
     * @return ResourceType
     */
    public static function PLAYER()
    {
        return new ResourceType(self::PLAYER);
    }

    /**
     * ANALYTICS
     *
     * @return ResourceType
     */
    public static function ANALYTICS()
    {
        return new ResourceType(self::ANALYTICS);
    }
}

