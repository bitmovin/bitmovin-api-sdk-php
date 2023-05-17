<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsAdConfigResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var \BitmovinApiSdk\Models\StreamsAdConfigAd[] */
    public $ads;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->ads = ObjectMapper::map($this->ads, StreamsAdConfigAd::class);
    }

    /**
     * ads
     *
     * @param \BitmovinApiSdk\Models\StreamsAdConfigAd[] $ads
     * @return $this
     */
    public function ads(array $ads)
    {
        $this->ads = $ads;

        return $this;
    }
}

