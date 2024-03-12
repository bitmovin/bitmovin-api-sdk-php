<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsLiveResponse extends StreamsResponse
{
    /** @var string */
    public $streamKey;

    /** @var StreamsLiveLifeCycle */
    public $lifeCycle;

    /** @var \BitmovinApiSdk\Models\StreamsStyleConfigResponse */
    public $styleConfig;

    /** @var string */
    public $posterUrl;

    /** @var \BitmovinApiSdk\Models\StreamsAdConfigResponse */
    public $adConfig;

    /** @var \BitmovinApiSdk\Models\StreamsDomainRestrictionResponse */
    public $domainRestriction;

    /** @var StreamsTrimmingStatus */
    public $trimming;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->lifeCycle = ObjectMapper::map($this->lifeCycle, StreamsLiveLifeCycle::class);
        $this->styleConfig = ObjectMapper::map($this->styleConfig, StreamsStyleConfigResponse::class);
        $this->adConfig = ObjectMapper::map($this->adConfig, StreamsAdConfigResponse::class);
        $this->domainRestriction = ObjectMapper::map($this->domainRestriction, StreamsDomainRestrictionResponse::class);
        $this->trimming = ObjectMapper::map($this->trimming, StreamsTrimmingStatus::class);
    }

    /**
     * styleConfig
     *
     * @param \BitmovinApiSdk\Models\StreamsStyleConfigResponse $styleConfig
     * @return $this
     */
    public function styleConfig(\BitmovinApiSdk\Models\StreamsStyleConfigResponse $styleConfig)
    {
        $this->styleConfig = $styleConfig;

        return $this;
    }

    /**
     * adConfig
     *
     * @param \BitmovinApiSdk\Models\StreamsAdConfigResponse $adConfig
     * @return $this
     */
    public function adConfig(\BitmovinApiSdk\Models\StreamsAdConfigResponse $adConfig)
    {
        $this->adConfig = $adConfig;

        return $this;
    }

    /**
     * domainRestriction
     *
     * @param \BitmovinApiSdk\Models\StreamsDomainRestrictionResponse $domainRestriction
     * @return $this
     */
    public function domainRestriction(\BitmovinApiSdk\Models\StreamsDomainRestrictionResponse $domainRestriction)
    {
        $this->domainRestriction = $domainRestriction;

        return $this;
    }
}

