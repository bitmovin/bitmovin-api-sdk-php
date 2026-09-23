<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisLiveCreateRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $name;

    /** @var string */
    public $streamKey;

    /** @var CloudRegion */
    public $cloudRegion;

    /** @var AiSceneAnalysisLiveRecordingRequest */
    public $recording;

    /** @var \BitmovinApiSdk\Models\AiSceneAnalysisLiveOutput[] */
    public $outputs;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->cloudRegion = ObjectMapper::map($this->cloudRegion, CloudRegion::class);
        $this->recording = ObjectMapper::map($this->recording, AiSceneAnalysisLiveRecordingRequest::class);
        $this->outputs = ObjectMapper::map($this->outputs, AiSceneAnalysisLiveOutput::class);
    }

    /**
     * Name of the Analysis
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Key used to publish the RTMP stream. When the Live Analysis is &#x60;RUNNING&#x60;, the Get Live Analysis details response returns the current value in &#x60;ingest.streamKey&#x60;. (required)
     *
     * @param string $streamKey
     * @return $this
     */
    public function streamKey(string $streamKey)
    {
        $this->streamKey = $streamKey;

        return $this;
    }

    /**
     * Region in which the AI analysis runs. &#x60;EXTERNAL&#x60; is not supported yet.
     *
     * @param CloudRegion $cloudRegion
     * @return $this
     */
    public function cloudRegion(CloudRegion $cloudRegion)
    {
        $this->cloudRegion = $cloudRegion;

        return $this;
    }

    /**
     * Destinations for the stream recording (required)
     *
     * @param AiSceneAnalysisLiveRecordingRequest $recording
     * @return $this
     */
    public function recording(AiSceneAnalysisLiveRecordingRequest $recording)
    {
        $this->recording = $recording;

        return $this;
    }

    /**
     * Destinations for cumulative AI analysis results (required)
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

