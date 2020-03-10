<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CencDrm extends Drm
{
    /** @var string */
    public $key;

    /** @var string */
    public $kid;

    /** @var EncryptionMode */
    public $encryptionMode;

    /** @var IvSize */
    public $ivSize;

    /** @var bool */
    public $enablePiffCompatibility;

    /** @var CencWidevine */
    public $widevine;

    /** @var CencPlayReady */
    public $playReady;

    /** @var CencMarlin */
    public $marlin;

    /** @var CencFairPlay */
    public $fairPlay;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->encryptionMode = ObjectMapper::map($this->encryptionMode, EncryptionMode::class);
        $this->ivSize = ObjectMapper::map($this->ivSize, IvSize::class);
        $this->widevine = ObjectMapper::map($this->widevine, CencWidevine::class);
        $this->playReady = ObjectMapper::map($this->playReady, CencPlayReady::class);
        $this->marlin = ObjectMapper::map($this->marlin, CencMarlin::class);
        $this->fairPlay = ObjectMapper::map($this->fairPlay, CencFairPlay::class);
    }

    /**
     * 16 byte encryption key, 32 hexadecimal characters (required)
     *
     * @param string $key
     * @return $this
     */
    public function key(string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * 16 byte encryption key id. Required for any other DRM but FairPlay
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
     * The encryption method to use. Default is &#x60;CTR&#x60; (required)
     *
     * @param EncryptionMode $encryptionMode
     * @return $this
     */
    public function encryptionMode(EncryptionMode $encryptionMode)
    {
        $this->encryptionMode = $encryptionMode;

        return $this;
    }

    /**
     * Size of the initialization vector
     *
     * @param IvSize $ivSize
     * @return $this
     */
    public function ivSize(IvSize $ivSize)
    {
        $this->ivSize = $ivSize;

        return $this;
    }

    /**
     * Enables compatibility with the Protected Interoperable File Format (PIFF) specification
     *
     * @param bool $enablePiffCompatibility
     * @return $this
     */
    public function enablePiffCompatibility(bool $enablePiffCompatibility)
    {
        $this->enablePiffCompatibility = $enablePiffCompatibility;

        return $this;
    }

    /**
     * Configuration for Widevine DRM
     *
     * @param CencWidevine $widevine
     * @return $this
     */
    public function widevine(CencWidevine $widevine)
    {
        $this->widevine = $widevine;

        return $this;
    }

    /**
     * Configuration for PlayReady DRM
     *
     * @param CencPlayReady $playReady
     * @return $this
     */
    public function playReady(CencPlayReady $playReady)
    {
        $this->playReady = $playReady;

        return $this;
    }

    /**
     * Configuration for Marlin DRM
     *
     * @param CencMarlin $marlin
     * @return $this
     */
    public function marlin(CencMarlin $marlin)
    {
        $this->marlin = $marlin;

        return $this;
    }

    /**
     * Configuration for FairPlay DRM
     *
     * @param CencFairPlay $fairPlay
     * @return $this
     */
    public function fairPlay(CencFairPlay $fairPlay)
    {
        $this->fairPlay = $fairPlay;

        return $this;
    }
}

