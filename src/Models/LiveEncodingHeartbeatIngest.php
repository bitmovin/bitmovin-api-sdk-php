<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatIngest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\LiveEncodingStatus */
    public $status;

    /** @var bool */
    public $healthy;

    /** @var \BitmovinApiSdk\Models\LiveEncodingHeartbeatIngestPoint[] */
    public $ingestPoints;

    /** @var \BitmovinApiSdk\Models\LiveEncodingHeartbeatIngestStream[] */
    public $streams;

    /** @var \BitmovinApiSdk\Models\RtmpUserIngestInfo */
    public $rtmpUserIngestInfo;

    /** @var int */
    public $droppedPacketsVideo;

    /** @var int */
    public $droppedPacketsAudio;

    /** @var int */
    public $corruptPacketsVideo;

    /** @var int */
    public $corruptPacketsAudio;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, LiveEncodingStatus::class);
        $this->ingestPoints = ObjectMapper::map($this->ingestPoints, LiveEncodingHeartbeatIngestPoint::class);
        $this->streams = ObjectMapper::map($this->streams, LiveEncodingHeartbeatIngestStream::class);
        $this->rtmpUserIngestInfo = ObjectMapper::map($this->rtmpUserIngestInfo, RtmpUserIngestInfo::class);
    }

    /**
     * status
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingStatus $status
     * @return $this
     */
    public function status(\BitmovinApiSdk\Models\LiveEncodingStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Indicates whether the ingest is healthy.
     *
     * @param bool $healthy
     * @return $this
     */
    public function healthy(bool $healthy)
    {
        $this->healthy = $healthy;

        return $this;
    }

    /**
     * Data about individual ingestPoints within the active live ingest.
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingHeartbeatIngestPoint[] $ingestPoints
     * @return $this
     */
    public function ingestPoints(array $ingestPoints)
    {
        $this->ingestPoints = $ingestPoints;

        return $this;
    }

    /**
     * Data about individual streams within the active live ingest.
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingHeartbeatIngestStream[] $streams
     * @return $this
     */
    public function streams(array $streams)
    {
        $this->streams = $streams;

        return $this;
    }

    /**
     * rtmpUserIngestInfo
     *
     * @param \BitmovinApiSdk\Models\RtmpUserIngestInfo $rtmpUserIngestInfo
     * @return $this
     */
    public function rtmpUserIngestInfo(\BitmovinApiSdk\Models\RtmpUserIngestInfo $rtmpUserIngestInfo)
    {
        $this->rtmpUserIngestInfo = $rtmpUserIngestInfo;

        return $this;
    }

    /**
     * Total number of dropped video packets since the live encoding started.
     *
     * @param int $droppedPacketsVideo
     * @return $this
     */
    public function droppedPacketsVideo(int $droppedPacketsVideo)
    {
        $this->droppedPacketsVideo = $droppedPacketsVideo;

        return $this;
    }

    /**
     * Total number of dropped audio packets since the live encoding started.
     *
     * @param int $droppedPacketsAudio
     * @return $this
     */
    public function droppedPacketsAudio(int $droppedPacketsAudio)
    {
        $this->droppedPacketsAudio = $droppedPacketsAudio;

        return $this;
    }

    /**
     * Total number of corrupt video packets since the live encoding started.
     *
     * @param int $corruptPacketsVideo
     * @return $this
     */
    public function corruptPacketsVideo(int $corruptPacketsVideo)
    {
        $this->corruptPacketsVideo = $corruptPacketsVideo;

        return $this;
    }

    /**
     * Total number of corrupt audio packets since the live encoding started.
     *
     * @param int $corruptPacketsAudio
     * @return $this
     */
    public function corruptPacketsAudio(int $corruptPacketsAudio)
    {
        $this->corruptPacketsAudio = $corruptPacketsAudio;

        return $this;
    }
}

