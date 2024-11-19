<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveStandbyPoolResponse extends BitmovinResource
{
    /** @var int */
    public $targetPoolSize;

    /** @var int */
    public $readyEncodings;

    /** @var int */
    public $preparingEncodings;

    /** @var int */
    public $errorEncodings;

    /** @var string */
    public $encodingTemplateName;

    /** @var LiveStandbyPoolStatus */
    public $poolStatus;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->poolStatus = ObjectMapper::map($this->poolStatus, LiveStandbyPoolStatus::class);
    }

    /**
     * The name of the encoding template used with this Standby Pool
     *
     * @param string $encodingTemplateName
     * @return $this
     */
    public function encodingTemplateName(string $encodingTemplateName)
    {
        $this->encodingTemplateName = $encodingTemplateName;

        return $this;
    }

    /**
     * poolStatus
     *
     * @param LiveStandbyPoolStatus $poolStatus
     * @return $this
     */
    public function poolStatus(LiveStandbyPoolStatus $poolStatus)
    {
        $this->poolStatus = $poolStatus;

        return $this;
    }
}

