<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Scheduling extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $priority;

    /** @var string[] */
    public $prewarmedInstancePoolIds;

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
     * List of prewarmed Instance pools. If set, prewarmed instances from pools with these IDs will be used for the Encoding if available. The pool IDs will be tried in the order in which they are passed.
     *
     * @param string[] $prewarmedInstancePoolIds
     * @return $this
     */
    public function prewarmedInstancePoolIds(array $prewarmedInstancePoolIds)
    {
        $this->prewarmedInstancePoolIds = $prewarmedInstancePoolIds;

        return $this;
    }
}

