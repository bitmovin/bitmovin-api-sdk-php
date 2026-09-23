<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisLiveResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $analysisId;

    /** @var string */
    public $encodingId;

    /** @var string */
    public $name;

    /** @var AiSceneAnalysisLiveStatus */
    public $status;

    /** @var AiSceneAnalysisLiveRecording */
    public $recording;

    /** @var \BitmovinApiSdk\Models\EncodingOutput[] */
    public $outputs;

    /** @var LiveEncoding */
    public $ingest;

    /** @var AiSceneAnalysisLiveError */
    public $error;

    /** @var Carbon */
    public $createdAt;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, AiSceneAnalysisLiveStatus::class);
        $this->recording = ObjectMapper::map($this->recording, AiSceneAnalysisLiveRecording::class);
        $this->outputs = ObjectMapper::map($this->outputs, EncodingOutput::class);
        $this->ingest = ObjectMapper::map($this->ingest, LiveEncoding::class);
        $this->error = ObjectMapper::map($this->error, AiSceneAnalysisLiveError::class);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
    }
}

