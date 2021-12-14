<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AdaptationSetTypeResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AdaptationSetType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, AdaptationSetType::class);
    }

    /**
     * The type of the adaptation set
     *
     * @param AdaptationSetType $type
     * @return $this
     */
    public function type(AdaptationSetType $type)
    {
        $this->type = $type;

        return $this;
    }
}

