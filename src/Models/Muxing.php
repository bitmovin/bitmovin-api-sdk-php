<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Muxing extends BitmovinResource
{
    /** @var \BitmovinApiSdk\Models\MuxingStream[] */
    public $streams;

    /** @var \BitmovinApiSdk\Models\EncodingOutput[] */
    public $outputs;

    /** @var int */
    public $avgBitrate;

    /** @var int */
    public $minBitrate;

    /** @var int */
    public $maxBitrate;

    /** @var \BitmovinApiSdk\Models\Ignoring[] */
    public $ignoredBy;

    /** @var StreamConditionsMode */
    public $streamConditionsMode;

    public static $discriminatorName = "type";
    public static $discriminatorMapping = [
        "FMP4" => Fmp4Muxing::class,
        "CMAF" => CmafMuxing::class,
        "MP4" => Mp4Muxing::class,
        "TS" => TsMuxing::class,
        "WEBM" => WebmMuxing::class,
        "MP3" => Mp3Muxing::class,
        "MXF" => MxfMuxing::class,
        "PROGRESSIVE_WAV" => ProgressiveWavMuxing::class,
        "PROGRESSIVE_WEBM" => ProgressiveWebmMuxing::class,
        "PROGRESSIVE_MOV" => ProgressiveMovMuxing::class,
        "PROGRESSIVE_TS" => ProgressiveTsMuxing::class,
        "BROADCAST_TS" => BroadcastTsMuxing::class,
        "CHUNKED_TEXT" => ChunkedTextMuxing::class,
        "TEXT" => TextMuxing::class,
        "SEGMENTED_RAW" => SegmentedRawMuxing::class,
        "PACKED_AUDIO" => PackedAudioMuxing::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->streams = ObjectMapper::map($this->streams, MuxingStream::class);
        $this->outputs = ObjectMapper::map($this->outputs, EncodingOutput::class);
        $this->ignoredBy = ObjectMapper::map($this->ignoredBy, Ignoring::class);
        $this->streamConditionsMode = ObjectMapper::map($this->streamConditionsMode, StreamConditionsMode::class);
    }

    /**
     * streams
     *
     * @param \BitmovinApiSdk\Models\MuxingStream[] $streams
     * @return $this
     */
    public function streams(array $streams)
    {
        $this->streams = $streams;

        return $this;
    }

    /**
     * outputs
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
     * Specifies how to proceed with the Muxing when some of its Streams are ignored (see &#39;condition&#39; property of the Stream resource). The settings only make a difference for Muxings with more than one Stream. When retrieving the resource after the analysis step of the encoding has finished, &#39;ignoredBy&#39; will indicate if and why it has been ignored.
     *
     * @param StreamConditionsMode $streamConditionsMode
     * @return $this
     */
    public function streamConditionsMode(StreamConditionsMode $streamConditionsMode)
    {
        $this->streamConditionsMode = $streamConditionsMode;

        return $this;
    }
}

