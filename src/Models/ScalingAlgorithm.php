<?php

namespace BitmovinApiSdk\Models;

class ScalingAlgorithm extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const FAST_BILINEAR = 'FAST_BILINEAR';

    /** @var string */
    private const BILINEAR = 'BILINEAR';

    /** @var string */
    private const BICUBIC = 'BICUBIC';

    /** @var string */
    private const EXPERIMENTAL = 'EXPERIMENTAL';

    /** @var string */
    private const NEAREST_NEIGHBOR = 'NEAREST_NEIGHBOR';

    /** @var string */
    private const AVERAGING_AREA = 'AVERAGING_AREA';

    /** @var string */
    private const BICUBIC_LUMA_BILINEAR_CHROMA = 'BICUBIC_LUMA_BILINEAR_CHROMA';

    /** @var string */
    private const GAUSS = 'GAUSS';

    /** @var string */
    private const SINC = 'SINC';

    /** @var string */
    private const LANCZOS = 'LANCZOS';

    /** @var string */
    private const SPLINE = 'SPLINE';

    /**
     * @param string $value
     * @return ScalingAlgorithm
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Determines the algorithm used for scaling
     *
     * @return ScalingAlgorithm
     */
    public static function FAST_BILINEAR()
    {
        return new ScalingAlgorithm(self::FAST_BILINEAR);
    }

    /**
     * Determines the algorithm used for scaling
     *
     * @return ScalingAlgorithm
     */
    public static function BILINEAR()
    {
        return new ScalingAlgorithm(self::BILINEAR);
    }

    /**
     * Determines the algorithm used for scaling
     *
     * @return ScalingAlgorithm
     */
    public static function BICUBIC()
    {
        return new ScalingAlgorithm(self::BICUBIC);
    }

    /**
     * Determines the algorithm used for scaling
     *
     * @return ScalingAlgorithm
     */
    public static function EXPERIMENTAL()
    {
        return new ScalingAlgorithm(self::EXPERIMENTAL);
    }

    /**
     * Determines the algorithm used for scaling
     *
     * @return ScalingAlgorithm
     */
    public static function NEAREST_NEIGHBOR()
    {
        return new ScalingAlgorithm(self::NEAREST_NEIGHBOR);
    }

    /**
     * Determines the algorithm used for scaling
     *
     * @return ScalingAlgorithm
     */
    public static function AVERAGING_AREA()
    {
        return new ScalingAlgorithm(self::AVERAGING_AREA);
    }

    /**
     * Determines the algorithm used for scaling
     *
     * @return ScalingAlgorithm
     */
    public static function BICUBIC_LUMA_BILINEAR_CHROMA()
    {
        return new ScalingAlgorithm(self::BICUBIC_LUMA_BILINEAR_CHROMA);
    }

    /**
     * Determines the algorithm used for scaling
     *
     * @return ScalingAlgorithm
     */
    public static function GAUSS()
    {
        return new ScalingAlgorithm(self::GAUSS);
    }

    /**
     * Determines the algorithm used for scaling
     *
     * @return ScalingAlgorithm
     */
    public static function SINC()
    {
        return new ScalingAlgorithm(self::SINC);
    }

    /**
     * Determines the algorithm used for scaling
     *
     * @return ScalingAlgorithm
     */
    public static function LANCZOS()
    {
        return new ScalingAlgorithm(self::LANCZOS);
    }

    /**
     * Determines the algorithm used for scaling
     *
     * @return ScalingAlgorithm
     */
    public static function SPLINE()
    {
        return new ScalingAlgorithm(self::SPLINE);
    }
}

