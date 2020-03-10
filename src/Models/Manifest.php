<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Manifest extends BitmovinResource
{
    /** @var ManifestType */
    public $type;

    /** @var \BitmovinApiSdk\Models\EncodingOutput[] */
    public $outputs;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, ManifestType::class);
        $this->outputs = ObjectMapper::map($this->outputs, EncodingOutput::class);
    }

    /**
     * The outputs to store the manifest (required)
     *
     * @param \BitmovinApiSdk\Models\EncodingOutput[] $outputs
     * @return $this
     */
    public function outputs(array $outputs)
    {
        $this->outputs = $outputs;

        return $this;
    }
}

