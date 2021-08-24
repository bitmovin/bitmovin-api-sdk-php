<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WatchFolder extends BitmovinResource
{
    /** @var \BitmovinApiSdk\Models\WatchFolderInput */
    public $input;

    /** @var \BitmovinApiSdk\Models\WatchFolderOutput[] */
    public $outputs;

    /** @var WatchFolderStatus */
    public $status;

    /** @var string */
    public $statusText;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->input = ObjectMapper::map($this->input, WatchFolderInput::class);
        $this->outputs = ObjectMapper::map($this->outputs, WatchFolderOutput::class);
        $this->status = ObjectMapper::map($this->status, WatchFolderStatus::class);
    }

    /**
     * input
     *
     * @param \BitmovinApiSdk\Models\WatchFolderInput $input
     * @return $this
     */
    public function input(\BitmovinApiSdk\Models\WatchFolderInput $input)
    {
        $this->input = $input;

        return $this;
    }

    /**
     * outputs
     *
     * @param \BitmovinApiSdk\Models\WatchFolderOutput[] $outputs
     * @return $this
     */
    public function outputs(array $outputs)
    {
        $this->outputs = $outputs;

        return $this;
    }
}

