<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalPlusEvolutionFrameworkControl extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return DolbyDigitalPlusEvolutionFrameworkControl
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable Dolby Evolution Framework control feature
     *
     * @return DolbyDigitalPlusEvolutionFrameworkControl
     */
    public static function ENABLED()
    {
        return new DolbyDigitalPlusEvolutionFrameworkControl(self::ENABLED);
    }

    /**
     * Disable Dolby Evolution Framework control feature
     *
     * @return DolbyDigitalPlusEvolutionFrameworkControl
     */
    public static function DISABLED()
    {
        return new DolbyDigitalPlusEvolutionFrameworkControl(self::DISABLED);
    }
}

