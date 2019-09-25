<?php

namespace BitmovinApiSdk\Models;

class ChromaLocation extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const UNSPECIFIED = 'UNSPECIFIED';

    /** @var string */
    private const LEFT = 'LEFT';

    /** @var string */
    private const CENTER = 'CENTER';

    /** @var string */
    private const TOPLEFT = 'TOPLEFT';

    /** @var string */
    private const TOP = 'TOP';

    /** @var string */
    private const BOTTOMLEFT = 'BOTTOMLEFT';

    /** @var string */
    private const BOTTOM = 'BOTTOM';

    /**
     * @param string $value
     * @return ChromaLocation
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Unspecified ChromaLocation
     *
     * @return ChromaLocation
     */
    public static function UNSPECIFIED()
    {
        return new ChromaLocation(self::UNSPECIFIED);
    }

    /**
     * Left ChromaLocation
     *
     * @return ChromaLocation
     */
    public static function LEFT()
    {
        return new ChromaLocation(self::LEFT);
    }

    /**
     * Center ChromaLocation
     *
     * @return ChromaLocation
     */
    public static function CENTER()
    {
        return new ChromaLocation(self::CENTER);
    }

    /**
     * Topleft ChromaLocation
     *
     * @return ChromaLocation
     */
    public static function TOPLEFT()
    {
        return new ChromaLocation(self::TOPLEFT);
    }

    /**
     * Top ChromaLocation
     *
     * @return ChromaLocation
     */
    public static function TOP()
    {
        return new ChromaLocation(self::TOP);
    }

    /**
     * Bottomleft ChromaLocation
     *
     * @return ChromaLocation
     */
    public static function BOTTOMLEFT()
    {
        return new ChromaLocation(self::BOTTOMLEFT);
    }

    /**
     * Bottom ChromaLocation
     *
     * @return ChromaLocation
     */
    public static function BOTTOM()
    {
        return new ChromaLocation(self::BOTTOM);
    }
}

