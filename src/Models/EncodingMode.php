<?php

namespace BitmovinApiSdk\Models;

class EncodingMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const STANDARD = 'STANDARD';

    /** @var string */
    private const SINGLE_PASS = 'SINGLE_PASS';

    /** @var string */
    private const TWO_PASS = 'TWO_PASS';

    /** @var string */
    private const THREE_PASS = 'THREE_PASS';

    /**
     * @param string $value
     * @return EncodingMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The standard encoding mode is ONE_PASS for LIVE encodings and TWO_PASS for VOD encodings
     *
     * @return EncodingMode
     */
    public static function STANDARD()
    {
        return new EncodingMode(self::STANDARD);
    }

    /**
     * Single pass encoding
     *
     * @return EncodingMode
     */
    public static function SINGLE_PASS()
    {
        return new EncodingMode(self::SINGLE_PASS);
    }

    /**
     * Two pass encoding for better quality
     *
     * @return EncodingMode
     */
    public static function TWO_PASS()
    {
        return new EncodingMode(self::TWO_PASS);
    }

    /**
     * Three pass encoding for best quality (this only works for VoD workflows)
     *
     * @return EncodingMode
     */
    public static function THREE_PASS()
    {
        return new EncodingMode(self::THREE_PASS);
    }
}

