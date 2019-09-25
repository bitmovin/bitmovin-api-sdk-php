<?php

namespace BitmovinApiSdk\Models;

class TextFilterFont extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DEJAVUSANS = 'DEJAVUSANS';

    /** @var string */
    private const DEJAVUSERIF = 'DEJAVUSERIF';

    /** @var string */
    private const DEJAVUSANSMONO = 'DEJAVUSANSMONO';

    /** @var string */
    private const ROBOTOMONO = 'ROBOTOMONO';

    /** @var string */
    private const ROBOTOBLACK = 'ROBOTOBLACK';

    /** @var string */
    private const ROBOTO = 'ROBOTO';

    /** @var string */
    private const ROBOTOCONDENSED = 'ROBOTOCONDENSED';

    /**
     * @param string $value
     * @return TextFilterFont
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * DEJAVUSANS
     *
     * @return TextFilterFont
     */
    public static function DEJAVUSANS()
    {
        return new TextFilterFont(self::DEJAVUSANS);
    }

    /**
     * DEJAVUSERIF
     *
     * @return TextFilterFont
     */
    public static function DEJAVUSERIF()
    {
        return new TextFilterFont(self::DEJAVUSERIF);
    }

    /**
     * DEJAVUSANSMONO
     *
     * @return TextFilterFont
     */
    public static function DEJAVUSANSMONO()
    {
        return new TextFilterFont(self::DEJAVUSANSMONO);
    }

    /**
     * ROBOTOMONO
     *
     * @return TextFilterFont
     */
    public static function ROBOTOMONO()
    {
        return new TextFilterFont(self::ROBOTOMONO);
    }

    /**
     * ROBOTOBLACK
     *
     * @return TextFilterFont
     */
    public static function ROBOTOBLACK()
    {
        return new TextFilterFont(self::ROBOTOBLACK);
    }

    /**
     * ROBOTO
     *
     * @return TextFilterFont
     */
    public static function ROBOTO()
    {
        return new TextFilterFont(self::ROBOTO);
    }

    /**
     * ROBOTOCONDENSED
     *
     * @return TextFilterFont
     */
    public static function ROBOTOCONDENSED()
    {
        return new TextFilterFont(self::ROBOTOCONDENSED);
    }
}

