<?php

namespace BitmovinApiSdk\Models;

class SceneType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const LOGO_IDENT = 'LOGO_IDENT';

    /** @var string */
    private const OPENING_CREDITS = 'OPENING_CREDITS';

    /** @var string */
    private const RECAP = 'RECAP';

    /** @var string */
    private const PREVIEW_THIS_TITLE = 'PREVIEW_THIS_TITLE';

    /** @var string */
    private const PROMOTION_OTHER_TITLE = 'PROMOTION_OTHER_TITLE';

    /** @var string */
    private const BREAK_BUMPER = 'BREAK_BUMPER';

    /** @var string */
    private const END_CREDITS = 'END_CREDITS';

    /** @var string */
    private const ADS = 'ADS';

    /** @var string */
    private const MAIN_CONTENT = 'MAIN_CONTENT';

    /** @var string */
    private const UNKNOWN = 'UNKNOWN';

    /**
     * @param string $value
     * @return SceneType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Network, studio, or platform identification bumpers
     *
     * @return SceneType
     */
    public static function LOGO_IDENT()
    {
        return new SceneType(self::LOGO_IDENT);
    }

    /**
     * Opening sequence presenting title, credits, or thematic elements without in-world dialogue
     *
     * @return SceneType
     */
    public static function OPENING_CREDITS()
    {
        return new SceneType(self::OPENING_CREDITS);
    }

    /**
     * &quot;Previously on …&quot; montage sequences from prior episodes
     *
     * @return SceneType
     */
    public static function RECAP()
    {
        return new SceneType(self::RECAP);
    }

    /**
     * Teaser or preview for this title or its upcoming episode
     *
     * @return SceneType
     */
    public static function PREVIEW_THIS_TITLE()
    {
        return new SceneType(self::PREVIEW_THIS_TITLE);
    }

    /**
     * Promotion or trailer for a different title or programming
     *
     * @return SceneType
     */
    public static function PROMOTION_OTHER_TITLE()
    {
        return new SceneType(self::PROMOTION_OTHER_TITLE);
    }

    /**
     * Short bumper marking an act or advertising break
     *
     * @return SceneType
     */
    public static function BREAK_BUMPER()
    {
        return new SceneType(self::BREAK_BUMPER);
    }

    /**
     * Closing credits, acknowledgments, or copyright notices
     *
     * @return SceneType
     */
    public static function END_CREDITS()
    {
        return new SceneType(self::END_CREDITS);
    }

    /**
     * Commercial advertisements with promotional intent and call-to-action
     *
     * @return SceneType
     */
    public static function ADS()
    {
        return new SceneType(self::ADS);
    }

    /**
     * Main narrative, dialogue, or educational material
     *
     * @return SceneType
     */
    public static function MAIN_CONTENT()
    {
        return new SceneType(self::MAIN_CONTENT);
    }

    /**
     * Fallback when AI confidence is below minimum threshold
     *
     * @return SceneType
     */
    public static function UNKNOWN()
    {
        return new SceneType(self::UNKNOWN);
    }
}

