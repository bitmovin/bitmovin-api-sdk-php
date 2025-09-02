<?php

namespace BitmovinApiSdk\Models;

class SceneType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const OPENING_TITLES = 'OPENING_TITLES';

    /** @var string */
    private const EPISODE_TITLE_CARD = 'EPISODE_TITLE_CARD';

    /** @var string */
    private const STUDIO_LOGO_BUMPER = 'STUDIO_LOGO_BUMPER';

    /** @var string */
    private const NETWORK_OR_PLATFORM_IDENT = 'NETWORK_OR_PLATFORM_IDENT';

    /** @var string */
    private const RECAP = 'RECAP';

    /** @var string */
    private const PREVIEW_THIS_TITLE = 'PREVIEW_THIS_TITLE';

    /** @var string */
    private const PROMO_OTHER_TITLE = 'PROMO_OTHER_TITLE';

    /** @var string */
    private const TRAILER_OTHER_TITLE = 'TRAILER_OTHER_TITLE';

    /** @var string */
    private const ADS = 'ADS';

    /** @var string */
    private const ACT_BREAK_EYECATCH = 'ACT_BREAK_EYECATCH';

    /** @var string */
    private const TECHNICAL_SLATE_OR_TEST = 'TECHNICAL_SLATE_OR_TEST';

    /** @var string */
    private const MAIN_CONTENT = 'MAIN_CONTENT';

    /** @var string */
    private const MID_CREDIT_SCENE = 'MID_CREDIT_SCENE';

    /** @var string */
    private const POST_CREDIT_SCENE = 'POST_CREDIT_SCENE';

    /** @var string */
    private const END_CREDITS = 'END_CREDITS';

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
     * Opening sequence presenting title, credits, and/or thematic elements; no in-world character dialogue
     *
     * @return SceneType
     */
    public static function OPENING_TITLES()
    {
        return new SceneType(self::OPENING_TITLES);
    }

    /**
     * Episode-specific title/chapter card (e.g., &quot;S02E04 — The Pact&quot;)
     *
     * @return SceneType
     */
    public static function EPISODE_TITLE_CARD()
    {
        return new SceneType(self::EPISODE_TITLE_CARD);
    }

    /**
     * Production/distributor logo stingers (e.g., MGM, WB, New Line)
     *
     * @return SceneType
     */
    public static function STUDIO_LOGO_BUMPER()
    {
        return new SceneType(self::STUDIO_LOGO_BUMPER);
    }

    /**
     * Network/platform idents/slates (e.g., &quot;A Netflix Original&quot;, channel idents)
     *
     * @return SceneType
     */
    public static function NETWORK_OR_PLATFORM_IDENT()
    {
        return new SceneType(self::NETWORK_OR_PLATFORM_IDENT);
    }

    /**
     * &quot;Previously on …&quot; montage sequences from previous episodes
     *
     * @return SceneType
     */
    public static function RECAP()
    {
        return new SceneType(self::RECAP);
    }

    /**
     * Teaser for this or the next episode of the same title
     *
     * @return SceneType
     */
    public static function PREVIEW_THIS_TITLE()
    {
        return new SceneType(self::PREVIEW_THIS_TITLE);
    }

    /**
     * Network promo for a different show on the same network/platform (schedule-centric)
     *
     * @return SceneType
     */
    public static function PROMO_OTHER_TITLE()
    {
        return new SceneType(self::PROMO_OTHER_TITLE);
    }

    /**
     * Full/standard trailer for a different title (cinematic style, not schedule-centric)
     *
     * @return SceneType
     */
    public static function TRAILER_OTHER_TITLE()
    {
        return new SceneType(self::TRAILER_OTHER_TITLE);
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
     * Short bumpers marking act/ad breaks (incl. anime eyecatches)
     *
     * @return SceneType
     */
    public static function ACT_BREAK_EYECATCH()
    {
        return new SceneType(self::ACT_BREAK_EYECATCH);
    }

    /**
     * Technical/packaging: test bars, countdowns, black/slates, legal-only cards
     *
     * @return SceneType
     */
    public static function TECHNICAL_SLATE_OR_TEST()
    {
        return new SceneType(self::TECHNICAL_SLATE_OR_TEST);
    }

    /**
     * Main narrative, dialogue, or educational material (default)
     *
     * @return SceneType
     */
    public static function MAIN_CONTENT()
    {
        return new SceneType(self::MAIN_CONTENT);
    }

    /**
     * Narrative content interspersed within end credits
     *
     * @return SceneType
     */
    public static function MID_CREDIT_SCENE()
    {
        return new SceneType(self::MID_CREDIT_SCENE);
    }

    /**
     * Narrative content appearing after all credits finish
     *
     * @return SceneType
     */
    public static function POST_CREDIT_SCENE()
    {
        return new SceneType(self::POST_CREDIT_SCENE);
    }

    /**
     * Closing credits, copyright notices, staff acknowledgments
     *
     * @return SceneType
     */
    public static function END_CREDITS()
    {
        return new SceneType(self::END_CREDITS);
    }

    /**
     * Fallback when AI confidence below minimum threshold
     *
     * @return SceneType
     */
    public static function UNKNOWN()
    {
        return new SceneType(self::UNKNOWN);
    }
}

