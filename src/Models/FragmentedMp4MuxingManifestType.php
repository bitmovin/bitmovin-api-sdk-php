<?php

namespace BitmovinApiSdk\Models;

class FragmentedMp4MuxingManifestType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SMOOTH = 'SMOOTH';

    /** @var string */
    private const DASH_ON_DEMAND = 'DASH_ON_DEMAND';

    /** @var string */
    private const HLS_BYTE_RANGES = 'HLS_BYTE_RANGES';

    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const HLS_BYTE_RANGES_AND_IFRAME_PLAYLIST = 'HLS_BYTE_RANGES_AND_IFRAME_PLAYLIST';

    /**
     * @param string $value
     * @return FragmentedMp4MuxingManifestType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Smooth Streaming manifest
     *
     * @return FragmentedMp4MuxingManifestType
     */
    public static function SMOOTH()
    {
        return new FragmentedMp4MuxingManifestType(self::SMOOTH);
    }

    /**
     * DASH On-demand manifest
     *
     * @return FragmentedMp4MuxingManifestType
     */
    public static function DASH_ON_DEMAND()
    {
        return new FragmentedMp4MuxingManifestType(self::DASH_ON_DEMAND);
    }

    /**
     * HLS manifest with byte ranges
     *
     * @return FragmentedMp4MuxingManifestType
     */
    public static function HLS_BYTE_RANGES()
    {
        return new FragmentedMp4MuxingManifestType(self::HLS_BYTE_RANGES);
    }

    /**
     * Dont create a manifest
     *
     * @return FragmentedMp4MuxingManifestType
     */
    public static function NONE()
    {
        return new FragmentedMp4MuxingManifestType(self::NONE);
    }

    /**
     * HLS manifest with byte ranges and I-frame playlist
     *
     * @return FragmentedMp4MuxingManifestType
     */
    public static function HLS_BYTE_RANGES_AND_IFRAME_PLAYLIST()
    {
        return new FragmentedMp4MuxingManifestType(self::HLS_BYTE_RANGES_AND_IFRAME_PLAYLIST);
    }
}

