<?php

namespace BitmovinApiSdk\Models;

class Department extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ACTING = 'ACTING';

    /** @var string */
    private const ANIMATION = 'ANIMATION';

    /** @var string */
    private const CASTING = 'CASTING';

    /** @var string */
    private const CINEMATOGRAPHY = 'CINEMATOGRAPHY';

    /** @var string */
    private const COSTUME_DESIGN = 'COSTUME_DESIGN';

    /** @var string */
    private const DIRECTING = 'DIRECTING';

    /** @var string */
    private const FILM_EDITING = 'FILM_EDITING';

    /** @var string */
    private const MAKEUP_AND_HAIRSTYLING = 'MAKEUP_AND_HAIRSTYLING';

    /** @var string */
    private const MUSIC = 'MUSIC';

    /** @var string */
    private const PRODUCTION = 'PRODUCTION';

    /** @var string */
    private const PRODUCTION_DESIGN = 'PRODUCTION_DESIGN';

    /** @var string */
    private const SOUND = 'SOUND';

    /** @var string */
    private const VISUAL_EFFECTS = 'VISUAL_EFFECTS';

    /** @var string */
    private const WRITING = 'WRITING';

    /** @var string */
    private const UNKNOWN = 'UNKNOWN';

    /**
     * @param string $value
     * @return Department
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Cast members and their portrayed characters
     *
     * @return Department
     */
    public static function ACTING()
    {
        return new Department(self::ACTING);
    }

    /**
     * Chief Animation Director, Animation Director, Character Designer, Color Design
     *
     * @return Department
     */
    public static function ANIMATION()
    {
        return new Department(self::ANIMATION);
    }

    /**
     * Casting Director
     *
     * @return Department
     */
    public static function CASTING()
    {
        return new Department(self::CASTING);
    }

    /**
     * Director of Photography
     *
     * @return Department
     */
    public static function CINEMATOGRAPHY()
    {
        return new Department(self::CINEMATOGRAPHY);
    }

    /**
     * Costume Designer
     *
     * @return Department
     */
    public static function COSTUME_DESIGN()
    {
        return new Department(self::COSTUME_DESIGN);
    }

    /**
     * Director
     *
     * @return Department
     */
    public static function DIRECTING()
    {
        return new Department(self::DIRECTING);
    }

    /**
     * Film Editor
     *
     * @return Department
     */
    public static function FILM_EDITING()
    {
        return new Department(self::FILM_EDITING);
    }

    /**
     * Department head Makeup Artist and Hair Stylist
     *
     * @return Department
     */
    public static function MAKEUP_AND_HAIRSTYLING()
    {
        return new Department(self::MAKEUP_AND_HAIRSTYLING);
    }

    /**
     * Film score Composer
     *
     * @return Department
     */
    public static function MUSIC()
    {
        return new Department(self::MUSIC);
    }

    /**
     * Producers and Executive Producers
     *
     * @return Department
     */
    public static function PRODUCTION()
    {
        return new Department(self::PRODUCTION);
    }

    /**
     * Production Designer
     *
     * @return Department
     */
    public static function PRODUCTION_DESIGN()
    {
        return new Department(self::PRODUCTION_DESIGN);
    }

    /**
     * Primary Sound Designer or Sound Mixer
     *
     * @return Department
     */
    public static function SOUND()
    {
        return new Department(self::SOUND);
    }

    /**
     * Visual Effects Supervisor
     *
     * @return Department
     */
    public static function VISUAL_EFFECTS()
    {
        return new Department(self::VISUAL_EFFECTS);
    }

    /**
     * Screenplay, Created By, or Story By credits
     *
     * @return Department
     */
    public static function WRITING()
    {
        return new Department(self::WRITING);
    }

    /**
     * Fallback when department cannot be determined
     *
     * @return Department
     */
    public static function UNKNOWN()
    {
        return new Department(self::UNKNOWN);
    }
}

