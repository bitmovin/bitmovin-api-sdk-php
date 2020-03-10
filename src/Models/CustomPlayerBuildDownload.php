<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CustomPlayerBuildDownload extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $downloadLink;

    /** @var Carbon */
    public $expiresAt;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->expiresAt = ObjectMapper::map($this->expiresAt, Carbon::class);
    }

    /**
     * The link to download the custom built player (required)
     *
     * @param string $downloadLink
     * @return $this
     */
    public function downloadLink(string $downloadLink)
    {
        $this->downloadLink = $downloadLink;

        return $this;
    }

    /**
     * Until this date the download link is valid and can be downloaded. (required)
     *
     * @param Carbon $expiresAt
     * @return $this
     */
    public function expiresAt(Carbon $expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }
}

