<?php

namespace BitmovinApiSdk\Models;

class ChannelsAttributeForAudio extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ALWAYS = 'ALWAYS';

    /** @var string */
    private const STANDARD_CONFORM = 'STANDARD_CONFORM';

    /** @var string */
    private const LEGACY = 'LEGACY';

    /**
     * @param string $value
     * @return ChannelsAttributeForAudio
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Always add CHANNELS attribute
     *
     * @return ChannelsAttributeForAudio
     */
    public static function ALWAYS()
    {
        return new ChannelsAttributeForAudio(self::ALWAYS);
    }

    /**
     * Add CHANNELS attribute according to the HLS specifications
     *
     * @return ChannelsAttributeForAudio
     */
    public static function STANDARD_CONFORM()
    {
        return new ChannelsAttributeForAudio(self::STANDARD_CONFORM);
    }

    /**
     * Legacy setting for the CHANNELS attribute
     *
     * @return ChannelsAttributeForAudio
     */
    public static function LEGACY()
    {
        return new ChannelsAttributeForAudio(self::LEGACY);
    }
}

