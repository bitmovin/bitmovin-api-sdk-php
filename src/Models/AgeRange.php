<?php

namespace BitmovinApiSdk\Models;

class AgeRange extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CHILD = 'CHILD';

    /** @var string */
    private const TEEN = 'TEEN';

    /** @var string */
    private const TWENTIES = 'TWENTIES';

    /** @var string */
    private const THIRTIES = 'THIRTIES';

    /** @var string */
    private const FORTIES = 'FORTIES';

    /** @var string */
    private const FIFTIES = 'FIFTIES';

    /** @var string */
    private const SIXTIES_PLUS = 'SIXTIES_PLUS';

    /** @var string */
    private const UNKNOWN = 'UNKNOWN';

    /**
     * @param string $value
     * @return AgeRange
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Character appears to be a child
     *
     * @return AgeRange
     */
    public static function CHILD()
    {
        return new AgeRange(self::CHILD);
    }

    /**
     * Character appears to be a teen
     *
     * @return AgeRange
     */
    public static function TEEN()
    {
        return new AgeRange(self::TEEN);
    }

    /**
     * Character appears to be in their 20s
     *
     * @return AgeRange
     */
    public static function TWENTIES()
    {
        return new AgeRange(self::TWENTIES);
    }

    /**
     * Character appears to be in their 30s
     *
     * @return AgeRange
     */
    public static function THIRTIES()
    {
        return new AgeRange(self::THIRTIES);
    }

    /**
     * Character appears to be in their 40s
     *
     * @return AgeRange
     */
    public static function FORTIES()
    {
        return new AgeRange(self::FORTIES);
    }

    /**
     * Character appears to be in their 50s
     *
     * @return AgeRange
     */
    public static function FIFTIES()
    {
        return new AgeRange(self::FIFTIES);
    }

    /**
     * Character appears to be 60 or older
     *
     * @return AgeRange
     */
    public static function SIXTIES_PLUS()
    {
        return new AgeRange(self::SIXTIES_PLUS);
    }

    /**
     * Fallback when age range cannot be determined
     *
     * @return AgeRange
     */
    public static function UNKNOWN()
    {
        return new AgeRange(self::UNKNOWN);
    }
}

