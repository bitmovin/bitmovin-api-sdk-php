<?php

namespace BitmovinApiSdk\Models;

class AdaptationSetType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const VIDEO = 'VIDEO';

    /** @var string */
    private const AUDIO = 'AUDIO';

    /** @var string */
    private const IMAGE = 'IMAGE';

    /** @var string */
    private const SUBTITLE = 'SUBTITLE';

    /**
     * @param string $value
     * @return AdaptationSetType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * VIDEO
     *
     * @return AdaptationSetType
     */
    public static function VIDEO()
    {
        return new AdaptationSetType(self::VIDEO);
    }

    /**
     * AUDIO
     *
     * @return AdaptationSetType
     */
    public static function AUDIO()
    {
        return new AdaptationSetType(self::AUDIO);
    }

    /**
     * IMAGE
     *
     * @return AdaptationSetType
     */
    public static function IMAGE()
    {
        return new AdaptationSetType(self::IMAGE);
    }

    /**
     * SUBTITLE
     *
     * @return AdaptationSetType
     */
    public static function SUBTITLE()
    {
        return new AdaptationSetType(self::SUBTITLE);
    }
}

