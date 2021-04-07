<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SpekeDrm extends Drm
{
    /** @var string */
    public $contentId;

    /** @var string */
    public $kid;

    /** @var string */
    public $iv;

    /** @var SpekeDrmProvider */
    public $provider;

    /** @var string[] */
    public $systemIds;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->provider = ObjectMapper::map($this->provider, SpekeDrmProvider::class);
    }

    /**
     * Unique Identifier of the content, will be generated if not set
     *
     * @param string $contentId
     * @return $this
     */
    public function contentId(string $contentId)
    {
        $this->contentId = $contentId;

        return $this;
    }

    /**
     * Optional key identifier, will be generated if not set. For SPEKE DRM Configurations with the same contentId and kid the key provider will provide the same keys.
     *
     * @param string $kid
     * @return $this
     */
    public function kid(string $kid)
    {
        $this->kid = $kid;

        return $this;
    }

    /**
     * 16 byte initialization vector represented by a 32-character text string. It is mandatory if systemIds contains AES128 or FairPlay.
     *
     * @param string $iv
     * @return $this
     */
    public function iv(string $iv)
    {
        $this->iv = $iv;

        return $this;
    }

    /**
     * Key provider configuration for SPEKE (required)
     *
     * @param SpekeDrmProvider $provider
     * @return $this
     */
    public function provider(SpekeDrmProvider $provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * DRM system identifier of the content protection scheme. At minimum one is expected. Not all systemIds are currently supported, support depends on the muxing type.  Relates to SPEKE implementation. See https://dashif.org/identifiers/content_protection/ (required)
     *
     * @param string[] $systemIds
     * @return $this
     */
    public function systemIds(array $systemIds)
    {
        $this->systemIds = $systemIds;

        return $this;
    }
}

