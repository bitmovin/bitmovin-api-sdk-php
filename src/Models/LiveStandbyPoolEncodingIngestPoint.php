<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveStandbyPoolEncodingIngestPoint extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $streamBaseUrl;

    /** @var string */
    public $streamKey;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * URL to the RTMP/RTMPS endpoint for this live encoding
     *
     * @param string $streamBaseUrl
     * @return $this
     */
    public function streamBaseUrl(string $streamBaseUrl)
    {
        $this->streamBaseUrl = $streamBaseUrl;

        return $this;
    }

    /**
     * Stream key value of this live encoding
     *
     * @param string $streamKey
     * @return $this
     */
    public function streamKey(string $streamKey)
    {
        $this->streamKey = $streamKey;

        return $this;
    }
}

