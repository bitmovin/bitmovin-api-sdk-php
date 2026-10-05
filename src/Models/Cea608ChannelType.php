<?php

namespace BitmovinApiSdk\Models;

class Cea608ChannelType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CC1 = 'CC1';

    /** @var string */
    private const CC3 = 'CC3';

    /**
     * @param string $value
     * @return Cea608ChannelType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Primary caption channel of field 1, the channel that carries the main captions in almost every stream
     *
     * @return Cea608ChannelType
     */
    public static function CC1()
    {
        return new Cea608ChannelType(self::CC1);
    }

    /**
     * Primary caption channel of field 2, typically used for a secondary language
     *
     * @return Cea608ChannelType
     */
    public static function CC3()
    {
        return new Cea608ChannelType(self::CC3);
    }
}

