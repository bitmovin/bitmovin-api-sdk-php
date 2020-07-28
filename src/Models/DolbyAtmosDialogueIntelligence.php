<?php

namespace BitmovinApiSdk\Models;

class DolbyAtmosDialogueIntelligence extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return DolbyAtmosDialogueIntelligence
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable Dialogue Intelligence feature
     *
     * @return DolbyAtmosDialogueIntelligence
     */
    public static function ENABLED()
    {
        return new DolbyAtmosDialogueIntelligence(self::ENABLED);
    }

    /**
     * Disable Dialogue Intelligence feature
     *
     * @return DolbyAtmosDialogueIntelligence
     */
    public static function DISABLED()
    {
        return new DolbyAtmosDialogueIntelligence(self::DISABLED);
    }
}

