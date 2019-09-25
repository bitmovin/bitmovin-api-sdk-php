<?php

namespace BitmovinApiSdk\Models;

class BAdapt extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const FAST = 'FAST';

    /** @var string */
    private const FULL = 'FULL';

    /**
     * @param string $value
     * @return BAdapt
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Very fast, but not recommended
     *
     * @return BAdapt
     */
    public static function NONE()
    {
        return new BAdapt(self::NONE);
    }

    /**
     * A good balance between speed and quality
     *
     * @return BAdapt
     */
    public static function FAST()
    {
        return new BAdapt(self::FAST);
    }

    /**
     * Best Quality, but slow with high bframes
     *
     * @return BAdapt
     */
    public static function FULL()
    {
        return new BAdapt(self::FULL);
    }
}

