<?php

namespace BitmovinApiSdk\Models;

class MvPredictionMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const SPATIAL = 'SPATIAL';

    /** @var string */
    private const TEMPORAL = 'TEMPORAL';

    /** @var string */
    private const AUTO = 'AUTO';

    /**
     * @param string $value
     * @return MvPredictionMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Sets the Motion Vector Prediction Mode.
     *
     * @return MvPredictionMode
     */
    public static function NONE()
    {
        return new MvPredictionMode(self::NONE);
    }

    /**
     * Sets the Motion Vector Prediction Mode.
     *
     * @return MvPredictionMode
     */
    public static function SPATIAL()
    {
        return new MvPredictionMode(self::SPATIAL);
    }

    /**
     * Sets the Motion Vector Prediction Mode.
     *
     * @return MvPredictionMode
     */
    public static function TEMPORAL()
    {
        return new MvPredictionMode(self::TEMPORAL);
    }

    /**
     * Sets the Motion Vector Prediction Mode.
     *
     * @return MvPredictionMode
     */
    public static function AUTO()
    {
        return new MvPredictionMode(self::AUTO);
    }
}

