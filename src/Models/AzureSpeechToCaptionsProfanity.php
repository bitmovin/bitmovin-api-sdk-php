<?php

namespace BitmovinApiSdk\Models;

class AzureSpeechToCaptionsProfanity extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MASKED = 'MASKED';

    /** @var string */
    private const REMOVED = 'REMOVED';

    /** @var string */
    private const RAW = 'RAW';

    /**
     * @param string $value
     * @return AzureSpeechToCaptionsProfanity
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * MASKED
     *
     * @return AzureSpeechToCaptionsProfanity
     */
    public static function MASKED()
    {
        return new AzureSpeechToCaptionsProfanity(self::MASKED);
    }

    /**
     * REMOVED
     *
     * @return AzureSpeechToCaptionsProfanity
     */
    public static function REMOVED()
    {
        return new AzureSpeechToCaptionsProfanity(self::REMOVED);
    }

    /**
     * RAW
     *
     * @return AzureSpeechToCaptionsProfanity
     */
    public static function RAW()
    {
        return new AzureSpeechToCaptionsProfanity(self::RAW);
    }
}

