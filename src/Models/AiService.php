<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiService extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AiServiceProvider */
    public $provider;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->provider = ObjectMapper::map($this->provider, AiServiceProvider::class);
    }

    /**
     * AI service provider
     *
     * @param AiServiceProvider $provider
     * @return $this
     */
    public function provider(AiServiceProvider $provider)
    {
        $this->provider = $provider;

        return $this;
    }
}

