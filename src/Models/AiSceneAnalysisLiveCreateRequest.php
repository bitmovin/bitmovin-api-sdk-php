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

    /** @var string */
    public $encoderVersion;

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
     * Encoder release for the backing Live Encoding, using the same values and validation as &#x60;Encoding.encoderVersion&#x60; (for example, &#x60;LATEST&#x60; or a supported release version). Passed unchanged to the Encoding Resource Service. If omitted, the server default is used. Selects the full encoder release; component header overrides remain separate.
     *
     * @param string $encoderVersion
     * @return $this
     */
    public function encoderVersion(string $encoderVersion)
    {
        $this->encoderVersion = $encoderVersion;

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

