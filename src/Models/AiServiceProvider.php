<?php

namespace BitmovinApiSdk\Models;

class AiServiceProvider extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const GOOGLE = 'GOOGLE';

    /**
     * @param string $value
     * @return AiServiceProvider
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Gemini by Google AI
     *
     * @return AiServiceProvider
     */
    public static function GOOGLE()
    {
        return new AiServiceProvider(self::GOOGLE);
    }
}

