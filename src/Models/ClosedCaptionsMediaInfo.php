<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ClosedCaptionsMediaInfo extends SegmentsMediaInfo
{
    /** @var string */
    public $instreamId;

    /** @var bool */
    public $forced;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Specifies a Rendition within the segments in the Media Playlist. (See HLS spec 4.3.4.1. EXT-X-MEDIA INSTREAM-ID) (required)
     *
     * @param string $instreamId
     * @return $this
     */
    public function instreamId(string $instreamId)
    {
        $this->instreamId = $instreamId;

        return $this;
    }

    /**
     * A value of true indicates that the Rendition contains content which is considered essential to play.
     *
     * @param bool $forced
     * @return $this
     */
    public function forced(bool $forced)
    {
        $this->forced = $forced;

        return $this;
    }
}

