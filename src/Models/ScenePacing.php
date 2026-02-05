<?php

namespace BitmovinApiSdk\Models;

class ScenePacing extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SLOW = 'SLOW';

    /** @var string */
    private const MEASURED = 'MEASURED';

    /** @var string */
    private const BRISK = 'BRISK';

    /** @var string */
    private const FRANTIC = 'FRANTIC';

    /** @var string */
    private const UNKNOWN = 'UNKNOWN';

    /**
     * @param string $value
     * @return ScenePacing
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Deliberate, unhurried pace with contemplative moments or establishing shots
     *
     * @return ScenePacing
     */
    public static function SLOW()
    {
        return new ScenePacing(self::SLOW);
    }

    /**
     * Steady, controlled pace typical of dialogue-driven scenes or methodical storytelling
     *
     * @return ScenePacing
     */
    public static function MEASURED()
    {
        return new ScenePacing(self::MEASURED);
    }

    /**
     * Quick, energetic pace found in action sequences or montages
     *
     * @return ScenePacing
     */
    public static function BRISK()
    {
        return new ScenePacing(self::BRISK);
    }

    /**
     * Rapid, chaotic pace with intense action or panic-driven scenes
     *
     * @return ScenePacing
     */
    public static function FRANTIC()
    {
        return new ScenePacing(self::FRANTIC);
    }

    /**
     * Unable to determine pacing
     *
     * @return ScenePacing
     */
    public static function UNKNOWN()
    {
        return new ScenePacing(self::UNKNOWN);
    }
}

