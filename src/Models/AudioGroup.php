<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AudioGroup extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $name;

    /** @var int */
    public $priority;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Name of the audio group (required)
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Priority of the audio group (required)
     *
     * @param int $priority
     * @return $this
     */
    public function priority(int $priority)
    {
        $this->priority = $priority;

        return $this;
    }
}

