<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveStandbyPoolUpdate extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $targetPoolSize;

    /** @var string */
    public $encodingTemplate;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Number of instances to keep ready for streaming while the pool is running
     *
     * @param int $targetPoolSize
     * @return $this
     */
    public function targetPoolSize(int $targetPoolSize)
    {
        $this->targetPoolSize = $targetPoolSize;

        return $this;
    }

    /**
     * Base64 encoded template used to start the encodings in the pool
     *
     * @param string $encodingTemplate
     * @return $this
     */
    public function encodingTemplate(string $encodingTemplate)
    {
        $this->encodingTemplate = $encodingTemplate;

        return $this;
    }
}

