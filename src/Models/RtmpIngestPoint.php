<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class RtmpIngestPoint extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $applicationName;

    /** @var string */
    public $streamKey;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * The name of the application where the ingest is streamed to. This has to be unique for each ingest point (required)
     *
     * @param string $applicationName
     * @return $this
     */
    public function applicationName(string $applicationName)
    {
        $this->applicationName = $applicationName;

        return $this;
    }

    /**
     * The stream key for the backup input (required)
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

