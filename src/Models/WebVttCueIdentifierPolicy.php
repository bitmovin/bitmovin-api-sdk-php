<?php

namespace BitmovinApiSdk\Models;

class WebVttCueIdentifierPolicy extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const INCLUDE_IDENTIFIERS = 'INCLUDE_IDENTIFIERS';

    /** @var string */
    private const OMIT_IDENTIFIERS = 'OMIT_IDENTIFIERS';

    /**
     * @param string $value
     * @return WebVttCueIdentifierPolicy
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Cue identifiers are added in the resulting webvtt file
     *
     * @return WebVttCueIdentifierPolicy
     */
    public static function INCLUDE_IDENTIFIERS()
    {
        return new WebVttCueIdentifierPolicy(self::INCLUDE_IDENTIFIERS);
    }

    /**
     * Cue identifiers are not added in the resulting webvtt file
     *
     * @return WebVttCueIdentifierPolicy
     */
    public static function OMIT_IDENTIFIERS()
    {
        return new WebVttCueIdentifierPolicy(self::OMIT_IDENTIFIERS);
    }
}

