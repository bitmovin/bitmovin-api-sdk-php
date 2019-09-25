<?php

namespace BitmovinApiSdk\Models;

class H264Trellis extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const ENABLED_FINAL_MB = 'ENABLED_FINAL_MB';

    /** @var string */
    private const ENABLED_ALL = 'ENABLED_ALL';

    /**
     * @param string $value
     * @return H264Trellis
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Disabled
     *
     * @return H264Trellis
     */
    public static function DISABLED()
    {
        return new H264Trellis(self::DISABLED);
    }

    /**
     * Enabled only on the final encode of a macro block
     *
     * @return H264Trellis
     */
    public static function ENABLED_FINAL_MB()
    {
        return new H264Trellis(self::ENABLED_FINAL_MB);
    }

    /**
     * Enabled on all mode decisions
     *
     * @return H264Trellis
     */
    public static function ENABLED_ALL()
    {
        return new H264Trellis(self::ENABLED_ALL);
    }
}

