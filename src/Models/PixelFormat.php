<?php

namespace BitmovinApiSdk\Models;

class PixelFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const YUV410P = 'YUV410P';

    /** @var string */
    private const YUV411P = 'YUV411P';

    /** @var string */
    private const YUV420P = 'YUV420P';

    /** @var string */
    private const YUV422P = 'YUV422P';

    /** @var string */
    private const YUV440P = 'YUV440P';

    /** @var string */
    private const YUV444P = 'YUV444P';

    /** @var string */
    private const YUVJ411P = 'YUVJ411P';

    /** @var string */
    private const YUVJ420P = 'YUVJ420P';

    /** @var string */
    private const YUVJ422P = 'YUVJ422P';

    /** @var string */
    private const YUVJ440P = 'YUVJ440P';

    /** @var string */
    private const YUVJ444P = 'YUVJ444P';

    /** @var string */
    private const YUV420P10LE = 'YUV420P10LE';

    /** @var string */
    private const YUV422P10LE = 'YUV422P10LE';

    /** @var string */
    private const YUV440P10LE = 'YUV440P10LE';

    /** @var string */
    private const YUV444P10LE = 'YUV444P10LE';

    /** @var string */
    private const YUV420P12LE = 'YUV420P12LE';

    /** @var string */
    private const YUV422P12LE = 'YUV422P12LE';

    /** @var string */
    private const YUV440P12LE = 'YUV440P12LE';

    /** @var string */
    private const YUV444P12LE = 'YUV444P12LE';

    /** @var string */
    private const YUV420P10BE = 'YUV420P10BE';

    /** @var string */
    private const YUV422P10BE = 'YUV422P10BE';

    /** @var string */
    private const YUV440P10BE = 'YUV440P10BE';

    /** @var string */
    private const YUV444P10BE = 'YUV444P10BE';

    /** @var string */
    private const YUV420P12BE = 'YUV420P12BE';

    /** @var string */
    private const YUV422P12BE = 'YUV422P12BE';

    /** @var string */
    private const YUV440P12BE = 'YUV440P12BE';

    /** @var string */
    private const YUV444P12BE = 'YUV444P12BE';

    /**
     * @param string $value
     * @return PixelFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV410P()
    {
        return new PixelFormat(self::YUV410P);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV411P()
    {
        return new PixelFormat(self::YUV411P);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV420P()
    {
        return new PixelFormat(self::YUV420P);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV422P()
    {
        return new PixelFormat(self::YUV422P);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV440P()
    {
        return new PixelFormat(self::YUV440P);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV444P()
    {
        return new PixelFormat(self::YUV444P);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUVJ411P()
    {
        return new PixelFormat(self::YUVJ411P);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUVJ420P()
    {
        return new PixelFormat(self::YUVJ420P);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUVJ422P()
    {
        return new PixelFormat(self::YUVJ422P);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUVJ440P()
    {
        return new PixelFormat(self::YUVJ440P);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUVJ444P()
    {
        return new PixelFormat(self::YUVJ444P);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV420P10LE()
    {
        return new PixelFormat(self::YUV420P10LE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV422P10LE()
    {
        return new PixelFormat(self::YUV422P10LE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV440P10LE()
    {
        return new PixelFormat(self::YUV440P10LE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV444P10LE()
    {
        return new PixelFormat(self::YUV444P10LE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV420P12LE()
    {
        return new PixelFormat(self::YUV420P12LE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV422P12LE()
    {
        return new PixelFormat(self::YUV422P12LE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV440P12LE()
    {
        return new PixelFormat(self::YUV440P12LE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV444P12LE()
    {
        return new PixelFormat(self::YUV444P12LE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV420P10BE()
    {
        return new PixelFormat(self::YUV420P10BE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV422P10BE()
    {
        return new PixelFormat(self::YUV422P10BE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV440P10BE()
    {
        return new PixelFormat(self::YUV440P10BE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV444P10BE()
    {
        return new PixelFormat(self::YUV444P10BE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV420P12BE()
    {
        return new PixelFormat(self::YUV420P12BE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV422P12BE()
    {
        return new PixelFormat(self::YUV422P12BE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV440P12BE()
    {
        return new PixelFormat(self::YUV440P12BE);
    }

    /**
     * The pixel format to be set
     *
     * @return PixelFormat
     */
    public static function YUV444P12BE()
    {
        return new PixelFormat(self::YUV444P12BE);
    }
}

