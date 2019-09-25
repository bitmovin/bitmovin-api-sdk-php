<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamDetails extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $codec;

    /** @var int */
    public $duration;

    /** @var int */
    public $position;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * id
     *
     * @param string $id
     * @return $this
     */
    public function id(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * codec
     *
     * @param string $codec
     * @return $this
     */
    public function codec(string $codec)
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * duration
     *
     * @param int $duration
     * @return $this
     */
    public function duration(int $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * position
     *
     * @param int $position
     * @return $this
     */
    public function position(int $position)
    {
        $this->position = $position;

        return $this;
    }
}

