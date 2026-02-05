<?php

namespace BitmovinApiSdk\Models;

class SceneTension extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const EXTREME = 'EXTREME';

    /** @var string */
    private const HIGH = 'HIGH';

    /** @var string */
    private const MODERATE = 'MODERATE';

    /** @var string */
    private const LOW = 'LOW';

    /** @var string */
    private const UNKNOWN = 'UNKNOWN';

    /**
     * @param string $value
     * @return SceneTension
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Peak suspense or intensity, such as climactic confrontations or life-threatening situations
     *
     * @return SceneTension
     */
    public static function EXTREME()
    {
        return new SceneTension(self::EXTREME);
    }

    /**
     * Significant tension with emotionally charged moments, such as arguments or chase scenes
     *
     * @return SceneTension
     */
    public static function HIGH()
    {
        return new SceneTension(self::HIGH);
    }

    /**
     * Some tension present, engaging but not overwhelming, such as mild conflict or anticipation
     *
     * @return SceneTension
     */
    public static function MODERATE()
    {
        return new SceneTension(self::MODERATE);
    }

    /**
     * Minimal tension with calm or relaxed scenes, such as exposition or casual dialogue
     *
     * @return SceneTension
     */
    public static function LOW()
    {
        return new SceneTension(self::LOW);
    }

    /**
     * Unable to determine tension level
     *
     * @return SceneTension
     */
    public static function UNKNOWN()
    {
        return new SceneTension(self::UNKNOWN);
    }
}

