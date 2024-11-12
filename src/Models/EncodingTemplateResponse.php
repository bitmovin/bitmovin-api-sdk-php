<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingTemplateResponse extends BitmovinResource
{
    /** @var EncodingTemplateType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, EncodingTemplateType::class);
    }

    /**
     * type
     *
     * @param EncodingTemplateType $type
     * @return $this
     */
    public function type(EncodingTemplateType $type)
    {
        $this->type = $type;

        return $this;
    }
}

