<?php

namespace BitmovinApiSdk\Models;

class MediaConfigBitrate extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MCB_160000 = '160000';

    /** @var string */
    private const MCB_192000 = '192000';

    /** @var string */
    private const MCB_224000 = '224000';

    /** @var string */
    private const MCB_256000 = '256000';

    /** @var string */
    private const MCB_288000 = '288000';

    /** @var string */
    private const MCB_320000 = '320000';

    /** @var string */
    private const MCB_384000 = '384000';

    /** @var string */
    private const MCB_448000 = '448000';

    /**
     * @param string $value
     * @return MediaConfigBitrate
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The supported bitrate
     *
     * @return MediaConfigBitrate
     */
    public static function MCB_160000()
    {
        return new MediaConfigBitrate(self::MCB_160000);
    }

    /**
     * The supported bitrate
     *
     * @return MediaConfigBitrate
     */
    public static function MCB_192000()
    {
        return new MediaConfigBitrate(self::MCB_192000);
    }

    /**
     * The supported bitrate
     *
     * @return MediaConfigBitrate
     */
    public static function MCB_224000()
    {
        return new MediaConfigBitrate(self::MCB_224000);
    }

    /**
     * The supported bitrate
     *
     * @return MediaConfigBitrate
     */
    public static function MCB_256000()
    {
        return new MediaConfigBitrate(self::MCB_256000);
    }

    /**
     * The supported bitrate
     *
     * @return MediaConfigBitrate
     */
    public static function MCB_288000()
    {
        return new MediaConfigBitrate(self::MCB_288000);
    }

    /**
     * The supported bitrate
     *
     * @return MediaConfigBitrate
     */
    public static function MCB_320000()
    {
        return new MediaConfigBitrate(self::MCB_320000);
    }

    /**
     * The supported bitrate
     *
     * @return MediaConfigBitrate
     */
    public static function MCB_384000()
    {
        return new MediaConfigBitrate(self::MCB_384000);
    }

    /**
     * The supported bitrate
     *
     * @return MediaConfigBitrate
     */
    public static function MCB_448000()
    {
        return new MediaConfigBitrate(self::MCB_448000);
    }
}

