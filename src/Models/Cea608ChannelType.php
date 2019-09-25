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
     * Subtitle channel track
     *
     * @return Cea608ChannelType
     */
    public static function CC1()
    {
        return new Cea608ChannelType(self::CC1);
    }

    /**
     * Subtitle channel track
     *
     * @return Cea608ChannelType
     */
    public static function CC3()
    {
        return new Cea608ChannelType(self::CC3);
    }
}

