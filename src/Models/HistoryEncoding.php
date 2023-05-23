<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class HistoryEncoding extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Encoding */
    public $encoding;

    /** @var LiveEncoding */
    public $live;

    /** @var StartEncodingRequest */
    public $vodStartReqeust;

    /** @var StartLiveEncodingRequest */
    public $liveStartReqeust;

    /** @var Task */
    public $status;

    /** @var \BitmovinApiSdk\Models\StreamInput[] */
    public $inputStreams;

    /** @var \BitmovinApiSdk\Models\HistoryStream[] */
    public $streams;

    /** @var \BitmovinApiSdk\Models\HistoryMuxing[] */
    public $muxings;

    /** @var \BitmovinApiSdk\Models\Keyframe[] */
    public $keyFrames;

    /** @var \BitmovinApiSdk\Models\SidecarFile[] */
    public $sidecarFiles;

    /** @var \BitmovinApiSdk\Models\TransferRetry[] */
    public $transferRetries;

    /** @var \BitmovinApiSdk\Models\ConvertSccCaption[] */
    public $convertSccCaptions;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->encoding = ObjectMapper::map($this->encoding, Encoding::class);
        $this->live = ObjectMapper::map($this->live, LiveEncoding::class);
        $this->vodStartReqeust = ObjectMapper::map($this->vodStartReqeust, StartEncodingRequest::class);
        $this->liveStartReqeust = ObjectMapper::map($this->liveStartReqeust, StartLiveEncodingRequest::class);
        $this->status = ObjectMapper::map($this->status, Task::class);
        $this->inputStreams = ObjectMapper::map($this->inputStreams, StreamInput::class);
        $this->streams = ObjectMapper::map($this->streams, HistoryStream::class);
        $this->muxings = ObjectMapper::map($this->muxings, HistoryMuxing::class);
        $this->keyFrames = ObjectMapper::map($this->keyFrames, Keyframe::class);
        $this->sidecarFiles = ObjectMapper::map($this->sidecarFiles, SidecarFile::class);
        $this->transferRetries = ObjectMapper::map($this->transferRetries, TransferRetry::class);
        $this->convertSccCaptions = ObjectMapper::map($this->convertSccCaptions, ConvertSccCaption::class);
    }

    /**
     * Encoding
     *
     * @param Encoding $encoding
     * @return $this
     */
    public function encoding(Encoding $encoding)
    {
        $this->encoding = $encoding;

        return $this;
    }

    /**
     * Live Details
     *
     * @param LiveEncoding $live
     * @return $this
     */
    public function live(LiveEncoding $live)
    {
        $this->live = $live;

        return $this;
    }

    /**
     * VOD Encoding Start Request
     *
     * @param StartEncodingRequest $vodStartReqeust
     * @return $this
     */
    public function vodStartReqeust(StartEncodingRequest $vodStartReqeust)
    {
        $this->vodStartReqeust = $vodStartReqeust;

        return $this;
    }

    /**
     * Live Encoding Start Request
     *
     * @param StartLiveEncodingRequest $liveStartReqeust
     * @return $this
     */
    public function liveStartReqeust(StartLiveEncodingRequest $liveStartReqeust)
    {
        $this->liveStartReqeust = $liveStartReqeust;

        return $this;
    }

    /**
     * Encoding Status
     *
     * @param Task $status
     * @return $this
     */
    public function status(Task $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * inputStreams
     *
     * @param \BitmovinApiSdk\Models\StreamInput[] $inputStreams
     * @return $this
     */
    public function inputStreams(array $inputStreams)
    {
        $this->inputStreams = $inputStreams;

        return $this;
    }

    /**
     * streams
     *
     * @param \BitmovinApiSdk\Models\HistoryStream[] $streams
     * @return $this
     */
    public function streams(array $streams)
    {
        $this->streams = $streams;

        return $this;
    }

    /**
     * muxings
     *
     * @param \BitmovinApiSdk\Models\HistoryMuxing[] $muxings
     * @return $this
     */
    public function muxings(array $muxings)
    {
        $this->muxings = $muxings;

        return $this;
    }

    /**
     * keyFrames
     *
     * @param \BitmovinApiSdk\Models\Keyframe[] $keyFrames
     * @return $this
     */
    public function keyFrames(array $keyFrames)
    {
        $this->keyFrames = $keyFrames;

        return $this;
    }

    /**
     * sidecarFiles
     *
     * @param \BitmovinApiSdk\Models\SidecarFile[] $sidecarFiles
     * @return $this
     */
    public function sidecarFiles(array $sidecarFiles)
    {
        $this->sidecarFiles = $sidecarFiles;

        return $this;
    }

    /**
     * transferRetries
     *
     * @param \BitmovinApiSdk\Models\TransferRetry[] $transferRetries
     * @return $this
     */
    public function transferRetries(array $transferRetries)
    {
        $this->transferRetries = $transferRetries;

        return $this;
    }

    /**
     * convertSccCaptions
     *
     * @param \BitmovinApiSdk\Models\ConvertSccCaption[] $convertSccCaptions
     * @return $this
     */
    public function convertSccCaptions(array $convertSccCaptions)
    {
        $this->convertSccCaptions = $convertSccCaptions;

        return $this;
    }
}

