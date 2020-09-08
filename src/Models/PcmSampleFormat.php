<?php

namespace BitmovinApiSdk\Models;

class PcmSampleFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const S16LE = 'S16LE';

    /** @var string */
    private const S24LE = 'S24LE';

    /**
     * @param string $value
     * @return PcmSampleFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Signed 16 bit little endian sampling
     *
     * @return PcmSampleFormat
     */
    public static function S16LE()
    {
        return new PcmSampleFormat(self::S16LE);
    }

    /**
     * Signed 24 bit little endian sampling
     *
     * @return PcmSampleFormat
     */
    public static function S24LE()
    {
        return new PcmSampleFormat(self::S24LE);
    }
}

