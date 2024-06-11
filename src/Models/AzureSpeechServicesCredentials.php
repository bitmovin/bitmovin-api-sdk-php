<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AzureSpeechServicesCredentials extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $subscriptionKey;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Azure Speech Services resource key (required)
     *
     * @param string $subscriptionKey
     * @return $this
     */
    public function subscriptionKey(string $subscriptionKey)
    {
        $this->subscriptionKey = $subscriptionKey;

        return $this;
    }
}

