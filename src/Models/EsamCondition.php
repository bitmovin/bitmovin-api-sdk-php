<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EsamCondition extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $offset;

    /** @var EsamDirection */
    public $direction;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->direction = ObjectMapper::map($this->direction, EsamDirection::class);
    }

    /**
     * The offset from the matched signal when this condition applies in ISO 8601 duration format, accurate to milliseconds (required)
     *
     * @param string $offset
     * @return $this
     */
    public function offset(string $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Direction marker indicating the boundary type (OUT for start, IN for end) (required)
     *
     * @param EsamDirection $direction
     * @return $this
     */
    public function direction(EsamDirection $direction)
    {
        $this->direction = $direction;

        return $this;
    }
}

