<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ScheduledInsertableContent extends BitmovinResource
{
    /** @var string */
    public $contentId;

    /** @var Carbon */
    public $runAt;

    /** @var float */
    public $durationInSeconds;

    /** @var ScheduledInsertableContentStatus */
    public $status;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->runAt = ObjectMapper::map($this->runAt, Carbon::class);
        $this->status = ObjectMapper::map($this->status, ScheduledInsertableContentStatus::class);
    }

    /**
     * Id of the insertable content to play instead of the live stream
     *
     * @param string $contentId
     * @return $this
     */
    public function contentId(string $contentId)
    {
        $this->contentId = $contentId;

        return $this;
    }

    /**
     * Time to to play the content in UTC: YYYY-MM-DDThh:mm:ssZ, if this property is not set the content will be played as soon as possible.
     *
     * @param Carbon $runAt
     * @return $this
     */
    public function runAt(Carbon $runAt)
    {
        $this->runAt = $runAt;

        return $this;
    }

    /**
     * Duration for how long to play the content. Cut off if shorter, loop if longer than actual duration. This property is required if the insertable content is an image.
     *
     * @param float $durationInSeconds
     * @return $this
     */
    public function durationInSeconds(float $durationInSeconds)
    {
        $this->durationInSeconds = $durationInSeconds;

        return $this;
    }
}

