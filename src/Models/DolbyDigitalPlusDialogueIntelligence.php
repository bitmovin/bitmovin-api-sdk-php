<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalPlusDialogueIntelligence extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return DolbyDigitalPlusDialogueIntelligence
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable Dolby Dialogue Intelligence feature
     *
     * @return DolbyDigitalPlusDialogueIntelligence
     */
    public static function ENABLED()
    {
        return new DolbyDigitalPlusDialogueIntelligence(self::ENABLED);
    }

    /**
     * Disable Dolby Dialogue Intelligence feature
     *
     * @return DolbyDigitalPlusDialogueIntelligence
     */
    public static function DISABLED()
    {
        return new DolbyDigitalPlusDialogueIntelligence(self::DISABLED);
    }
}

