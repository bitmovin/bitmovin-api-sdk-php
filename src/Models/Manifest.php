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

    /** @var Status */
    public $status;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, ManifestType::class);
        $this->outputs = ObjectMapper::map($this->outputs, EncodingOutput::class);
        $this->status = ObjectMapper::map($this->status, Status::class);
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

    /**
     * Current status
     *
     * @param Status $status
     * @return $this
     */
    public function status(Status $status)
    {
        $this->status = $status;

        return $this;
    }
}

