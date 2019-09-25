<?php

namespace BitmovinApiSdk\Models;

class AdaptationSetRole extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ALTERNATE = 'ALTERNATE';

    /** @var string */
    private const CAPTION = 'CAPTION';

    /** @var string */
    private const COMMENTARY = 'COMMENTARY';

    /** @var string */
    private const DUB = 'DUB';

    /** @var string */
    private const MAIN = 'MAIN';

    /** @var string */
    private const SUBTITLE = 'SUBTITLE';

    /** @var string */
    private const SUPPLEMENTARY = 'SUPPLEMENTARY';

    /**
     * @param string $value
     * @return AdaptationSetRole
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Media content component that is an alternative to a main media content component of the same media component type
     *
     * @return AdaptationSetRole
     */
    public static function ALTERNATE()
    {
        return new AdaptationSetRole(self::ALTERNATE);
    }

    /**
     * Caption
     *
     * @return AdaptationSetRole
     */
    public static function CAPTION()
    {
        return new AdaptationSetRole(self::CAPTION);
    }

    /**
     * Media content component with commentary (typically audio, e.g. director&#39;s commentary)
     *
     * @return AdaptationSetRole
     */
    public static function COMMENTARY()
    {
        return new AdaptationSetRole(self::COMMENTARY);
    }

    /**
     * Media content component which is presented in a different language from the original (e.g. dubbed audio, translated captions)
     *
     * @return AdaptationSetRole
     */
    public static function DUB()
    {
        return new AdaptationSetRole(self::DUB);
    }

    /**
     * Main media component which is intended for presentation if no other information is provided
     *
     * @return AdaptationSetRole
     */
    public static function MAIN()
    {
        return new AdaptationSetRole(self::MAIN);
    }

    /**
     * Subtitle
     *
     * @return AdaptationSetRole
     */
    public static function SUBTITLE()
    {
        return new AdaptationSetRole(self::SUBTITLE);
    }

    /**
     * Media content component that is supplementary to a media content component of a different media component type
     *
     * @return AdaptationSetRole
     */
    public static function SUPPLEMENTARY()
    {
        return new AdaptationSetRole(self::SUPPLEMENTARY);
    }
}

