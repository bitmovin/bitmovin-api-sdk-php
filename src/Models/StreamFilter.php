<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamFilter extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var int */
    public $position;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The id of the filter that should be used in the stream (required)
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
     * Defines the order in which filters are applied. Filters are applied in ascending order. (required)
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

