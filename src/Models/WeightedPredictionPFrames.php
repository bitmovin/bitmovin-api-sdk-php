<?php

namespace BitmovinApiSdk\Models;

class WeightedPredictionPFrames extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const SIMPLE = 'SIMPLE';

    /** @var string */
    private const SMART = 'SMART';

    /**
     * @param string $value
     * @return WeightedPredictionPFrames
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Do not keep P-frame references
     *
     * @return WeightedPredictionPFrames
     */
    public static function DISABLED()
    {
        return new WeightedPredictionPFrames(self::DISABLED);
    }

    /**
     * Enable weighted references
     *
     * @return WeightedPredictionPFrames
     */
    public static function SIMPLE()
    {
        return new WeightedPredictionPFrames(self::SIMPLE);
    }

    /**
     * Enable weighted references and duplicates
     *
     * @return WeightedPredictionPFrames
     */
    public static function SMART()
    {
        return new WeightedPredictionPFrames(self::SMART);
    }
}

