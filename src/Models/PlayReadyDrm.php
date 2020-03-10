<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PlayReadyDrm extends Drm
{
    /** @var string */
    public $key;

    /** @var string */
    public $keySeed;

    /** @var string */
    public $laUrl;

    /** @var string */
    public $pssh;

    /** @var PlayReadyEncryptionMethod */
    public $method;

    /** @var string */
    public $kid;

    /** @var PlayReadyAdditionalInformation */
    public $additionalInformation;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->method = ObjectMapper::map($this->method, PlayReadyEncryptionMethod::class);
        $this->additionalInformation = ObjectMapper::map($this->additionalInformation, PlayReadyAdditionalInformation::class);
    }

    /**
     * 16 byte encryption key, 32 hexadecimal characters. Either key or keySeed is required
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
     * Key seed to generate key. Either key or keySeed is required
     *
     * @param string $keySeed
     * @return $this
     */
    public function keySeed(string $keySeed)
    {
        $this->keySeed = $keySeed;

        return $this;
    }

    /**
     * URL of the license server
     *
     * @param string $laUrl
     * @return $this
     */
    public function laUrl(string $laUrl)
    {
        $this->laUrl = $laUrl;

        return $this;
    }

    /**
     * Base64 encoded pssh payload
     *
     * @param string $pssh
     * @return $this
     */
    public function pssh(string $pssh)
    {
        $this->pssh = $pssh;

        return $this;
    }

    /**
     * method
     *
     * @param PlayReadyEncryptionMethod $method
     * @return $this
     */
    public function method(PlayReadyEncryptionMethod $method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Key identifier
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
     * additionalInformation
     *
     * @param PlayReadyAdditionalInformation $additionalInformation
     * @return $this
     */
    public function additionalInformation(PlayReadyAdditionalInformation $additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }
}

