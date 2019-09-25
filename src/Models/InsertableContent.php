<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InsertableContent extends BitmovinResource
{
    /** @var \BitmovinApiSdk\Models\InsertableContentInput[] */
    public $inputs;

    /** @var InsertableContentStatus */
    public $status;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->inputs = ObjectMapper::map($this->inputs, InsertableContentInput::class);
        $this->status = ObjectMapper::map($this->status, InsertableContentStatus::class);
    }

    /**
     * List of video files to be inserted in the live stream. These have to match the codec, aspect ration and frame rate of the live stream.
     *
     * @param \BitmovinApiSdk\Models\InsertableContentInput[] $inputs
     * @return $this
     */
    public function inputs(array $inputs)
    {
        $this->inputs = $inputs;

        return $this;
    }
}

