<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CacheControlSettingsHls extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var CacheControl */
    public $multiVariantPlaylist;

    /** @var CacheControl */
    public $variantPlaylist;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->multiVariantPlaylist = ObjectMapper::map($this->multiVariantPlaylist, CacheControl::class);
        $this->variantPlaylist = ObjectMapper::map($this->variantPlaylist, CacheControl::class);
    }

    /**
     * Cache control settings for HLS Multivariant playlist.
     *
     * @param CacheControl $multiVariantPlaylist
     * @return $this
     */
    public function multiVariantPlaylist(CacheControl $multiVariantPlaylist)
    {
        $this->multiVariantPlaylist = $multiVariantPlaylist;

        return $this;
    }

    /**
     * Cache control settings for HLS Media playlist.
     *
     * @param CacheControl $variantPlaylist
     * @return $this
     */
    public function variantPlaylist(CacheControl $variantPlaylist)
    {
        $this->variantPlaylist = $variantPlaylist;

        return $this;
    }
}

