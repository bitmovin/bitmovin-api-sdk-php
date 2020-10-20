<?php

namespace BitmovinApiSdk\Models;

class FilterType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CROP = 'CROP';

    /** @var string */
    private const CONFORM = 'CONFORM';

    /** @var string */
    private const WATERMARK = 'WATERMARK';

    /** @var string */
    private const ENHANCED_WATERMARK = 'ENHANCED_WATERMARK';

    /** @var string */
    private const ROTATE = 'ROTATE';

    /** @var string */
    private const DEINTERLACE = 'DEINTERLACE';

    /** @var string */
    private const ENHANCED_DEINTERLACE = 'ENHANCED_DEINTERLACE';

    /** @var string */
    private const AUDIO_MIX = 'AUDIO_MIX';

    /** @var string */
    private const DENOISE_HQDN3D = 'DENOISE_HQDN3D';

    /** @var string */
    private const TEXT = 'TEXT';

    /** @var string */
    private const UNSHARP = 'UNSHARP';

    /** @var string */
    private const SCALE = 'SCALE';

    /** @var string */
    private const INTERLACE = 'INTERLACE';

    /** @var string */
    private const AUDIO_VOLUME = 'AUDIO_VOLUME';

    /** @var string */
    private const EBU_R128_SINGLE_PASS = 'EBU_R128_SINGLE_PASS';

    /**
     * @param string $value
     * @return FilterType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * CROP
     *
     * @return FilterType
     */
    public static function CROP()
    {
        return new FilterType(self::CROP);
    }

    /**
     * CONFORM
     *
     * @return FilterType
     */
    public static function CONFORM()
    {
        return new FilterType(self::CONFORM);
    }

    /**
     * WATERMARK
     *
     * @return FilterType
     */
    public static function WATERMARK()
    {
        return new FilterType(self::WATERMARK);
    }

    /**
     * ENHANCED_WATERMARK
     *
     * @return FilterType
     */
    public static function ENHANCED_WATERMARK()
    {
        return new FilterType(self::ENHANCED_WATERMARK);
    }

    /**
     * ROTATE
     *
     * @return FilterType
     */
    public static function ROTATE()
    {
        return new FilterType(self::ROTATE);
    }

    /**
     * DEINTERLACE
     *
     * @return FilterType
     */
    public static function DEINTERLACE()
    {
        return new FilterType(self::DEINTERLACE);
    }

    /**
     * ENHANCED_DEINTERLACE
     *
     * @return FilterType
     */
    public static function ENHANCED_DEINTERLACE()
    {
        return new FilterType(self::ENHANCED_DEINTERLACE);
    }

    /**
     * AUDIO_MIX
     *
     * @return FilterType
     */
    public static function AUDIO_MIX()
    {
        return new FilterType(self::AUDIO_MIX);
    }

    /**
     * DENOISE_HQDN3D
     *
     * @return FilterType
     */
    public static function DENOISE_HQDN3D()
    {
        return new FilterType(self::DENOISE_HQDN3D);
    }

    /**
     * TEXT
     *
     * @return FilterType
     */
    public static function TEXT()
    {
        return new FilterType(self::TEXT);
    }

    /**
     * UNSHARP
     *
     * @return FilterType
     */
    public static function UNSHARP()
    {
        return new FilterType(self::UNSHARP);
    }

    /**
     * SCALE
     *
     * @return FilterType
     */
    public static function SCALE()
    {
        return new FilterType(self::SCALE);
    }

    /**
     * INTERLACE
     *
     * @return FilterType
     */
    public static function INTERLACE()
    {
        return new FilterType(self::INTERLACE);
    }

    /**
     * AUDIO_VOLUME
     *
     * @return FilterType
     */
    public static function AUDIO_VOLUME()
    {
        return new FilterType(self::AUDIO_VOLUME);
    }

    /**
     * EBU_R128_SINGLE_PASS
     *
     * @return FilterType
     */
    public static function EBU_R128_SINGLE_PASS()
    {
        return new FilterType(self::EBU_R128_SINGLE_PASS);
    }
}

