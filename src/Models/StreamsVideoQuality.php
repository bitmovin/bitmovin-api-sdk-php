<?php

namespace BitmovinApiSdk\Models;

class StreamsVideoQuality extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const PREVIEW = 'PREVIEW';

    /** @var string */
    private const DEFAULT = 'DEFAULT';

    /**
     * @param string $value
     * @return StreamsVideoQuality
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The loading placeholder displayed until the first encoding is done
     *
     * @return StreamsVideoQuality
     */
    public static function NONE()
    {
        return new StreamsVideoQuality(self::NONE);
    }

    /**
     * A lower quality preview encoding
     *
     * @return StreamsVideoQuality
     */
    public static function PREVIEW()
    {
        return new StreamsVideoQuality(self::PREVIEW);
    }

    /**
     * The default Per-title encoding
     *
     * @return StreamsVideoQuality
     */
    public static function DEFAULT()
    {
        return new StreamsVideoQuality(self::DEFAULT);
    }
}

