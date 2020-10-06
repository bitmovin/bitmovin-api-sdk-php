<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Scheduling extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $priority;

    /** @var string[] */
    public $prewarmedEncoderPoolIds;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Specify the priority of this encoding (0 - 100). Higher numbers mean higher priority. Default is 50.
     *
     * @param int $priority
     * @return $this
     */
    public function priority(int $priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * List of prewarmed encoder pools. If set, prewarmed encoders from pools with these IDs will be used for the encoding if available. The pool IDs will be tried in the order in which they are passed.
     *
     * @param string[] $prewarmedEncoderPoolIds
     * @return $this
     */
    public function prewarmedEncoderPoolIds(array $prewarmedEncoderPoolIds)
    {
        $this->prewarmedEncoderPoolIds = $prewarmedEncoderPoolIds;

        return $this;
    }
}

