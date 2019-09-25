<?php

namespace BitmovinApiSdk\Models;

class AdaptiveQuantMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const VARIANCE = 'VARIANCE';

    /** @var string */
    private const AUTO_VARIANCE = 'AUTO_VARIANCE';

    /** @var string */
    private const AUTO_VARIANCE_DARK_SCENES = 'AUTO_VARIANCE_DARK_SCENES';

    /**
     * @param string $value
     * @return AdaptiveQuantMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Disable adaptive quantization
     *
     * @return AdaptiveQuantMode
     */
    public static function DISABLED()
    {
        return new AdaptiveQuantMode(self::DISABLED);
    }

    /**
     * Redistributes bits within each frame
     *
     * @return AdaptiveQuantMode
     */
    public static function VARIANCE()
    {
        return new AdaptiveQuantMode(self::VARIANCE);
    }

    /**
     * Redistributes bits across the whole video
     *
     * @return AdaptiveQuantMode
     */
    public static function AUTO_VARIANCE()
    {
        return new AdaptiveQuantMode(self::AUTO_VARIANCE);
    }

    /**
     * Redistributes bits across the whole video with a bias to dark scenes
     *
     * @return AdaptiveQuantMode
     */
    public static function AUTO_VARIANCE_DARK_SCENES()
    {
        return new AdaptiveQuantMode(self::AUTO_VARIANCE_DARK_SCENES);
    }
}

