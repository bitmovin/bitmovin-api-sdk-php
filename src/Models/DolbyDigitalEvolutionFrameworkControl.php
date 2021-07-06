<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalEvolutionFrameworkControl extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return DolbyDigitalEvolutionFrameworkControl
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable Dolby Evolution Framework control feature
     *
     * @return DolbyDigitalEvolutionFrameworkControl
     */
    public static function ENABLED()
    {
        return new DolbyDigitalEvolutionFrameworkControl(self::ENABLED);
    }

    /**
     * Disable Dolby Evolution Framework control feature
     *
     * @return DolbyDigitalEvolutionFrameworkControl
     */
    public static function DISABLED()
    {
        return new DolbyDigitalEvolutionFrameworkControl(self::DISABLED);
    }
}

