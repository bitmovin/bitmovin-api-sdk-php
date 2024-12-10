<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CdnOutput extends Output
{
    /** @var string */
    public $domainName;

    /** @var CdnProvider */
    public $cdnProvider;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->cdnProvider = ObjectMapper::map($this->cdnProvider, CdnProvider::class);
    }

    /**
     * CDN Provider of the Output
     *
     * @param CdnProvider $cdnProvider
     * @return $this
     */
    public function cdnProvider(CdnProvider $cdnProvider)
    {
        $this->cdnProvider = $cdnProvider;

        return $this;
    }
}

