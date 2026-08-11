<?php

namespace BitmovinApiSdk\Models;

class DolbyLoudnessDialogueIntelligence extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return DolbyLoudnessDialogueIntelligence
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable Dolby Dialogue Intelligence feature
     *
     * @return DolbyLoudnessDialogueIntelligence
     */
    public static function ENABLED()
    {
        return new DolbyLoudnessDialogueIntelligence(self::ENABLED);
    }

    /**
     * Disable Dolby Dialogue Intelligence feature
     *
     * @return DolbyLoudnessDialogueIntelligence
     */
    public static function DISABLED()
    {
        return new DolbyLoudnessDialogueIntelligence(self::DISABLED);
    }
}

