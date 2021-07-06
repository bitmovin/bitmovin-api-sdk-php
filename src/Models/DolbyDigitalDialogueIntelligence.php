<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalDialogueIntelligence extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return DolbyDigitalDialogueIntelligence
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable Dolby Dialogue Intelligence feature
     *
     * @return DolbyDigitalDialogueIntelligence
     */
    public static function ENABLED()
    {
        return new DolbyDigitalDialogueIntelligence(self::ENABLED);
    }

    /**
     * Disable Dolby Dialogue Intelligence feature
     *
     * @return DolbyDigitalDialogueIntelligence
     */
    public static function DISABLED()
    {
        return new DolbyDigitalDialogueIntelligence(self::DISABLED);
    }
}

