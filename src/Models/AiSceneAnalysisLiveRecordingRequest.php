<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisLiveRecordingRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\AiSceneAnalysisLiveOutput[] */
    public $outputs;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->outputs = ObjectMapper::map($this->outputs, AiSceneAnalysisLiveOutput::class);
    }

    /**
     * Destinations for the stream recording (required)
     *
     * @param \BitmovinApiSdk\Models\AiSceneAnalysisLiveOutput[] $outputs
     * @return $this
     */
    public function outputs(array $outputs)
    {
        $this->outputs = $outputs;

        return $this;
    }
}

