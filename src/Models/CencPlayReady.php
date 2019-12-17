<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CencPlayReady extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $laUrl;

    /** @var string */
    public $pssh;

    /** @var PlayReadyAdditionalInformation */
    public $additionalInformation;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->additionalInformation = ObjectMapper::map($this->additionalInformation, PlayReadyAdditionalInformation::class);
    }

    /**
     * Url of the license server. Either the laUrl or the pssh needs to be provided.
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
     * Base64 encoded pssh payload.
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

