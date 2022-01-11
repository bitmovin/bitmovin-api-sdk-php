<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashRepresentationTypeResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var DashRepresentationTypeDiscriminator */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, DashRepresentationTypeDiscriminator::class);
    }

    /**
     * The type of the DASH representation
     *
     * @param DashRepresentationTypeDiscriminator $type
     * @return $this
     */
    public function type(DashRepresentationTypeDiscriminator $type)
    {
        $this->type = $type;

        return $this;
    }
}

