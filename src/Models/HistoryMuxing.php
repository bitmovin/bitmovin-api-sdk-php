<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class HistoryMuxing extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Muxing */
    public $muxing;

    /** @var \BitmovinApiSdk\Models\Drm[] */
    public $drms;

    /** @var BroadcastTsMuxingInformation */
    public $broadcastTsMuxingInformation;

    /** @var Fmp4MuxingInformation */
    public $fmp4MuxingInformation;

    /** @var Mp3MuxingInformation */
    public $mp3MuxingInformation;

    /** @var Mp4MuxingInformation */
    public $mp4MuxingInformation;

    /** @var PackedAudioMuxingInformation */
    public $packedAudioMuxingInformation;

    /** @var ProgressiveMovMuxingInformation */
    public $progressiveMovMuxingInformation;

    /** @var ProgressiveTsMuxingInformation */
    public $progressiveTsMuxingInformation;

    /** @var ProgressiveWebmMuxingInformation */
    public $progressiveWebmMuxingInformation;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->muxing = ObjectMapper::map($this->muxing, Muxing::class);
        $this->drms = ObjectMapper::map($this->drms, Drm::class);
        $this->broadcastTsMuxingInformation = ObjectMapper::map($this->broadcastTsMuxingInformation, BroadcastTsMuxingInformation::class);
        $this->fmp4MuxingInformation = ObjectMapper::map($this->fmp4MuxingInformation, Fmp4MuxingInformation::class);
        $this->mp3MuxingInformation = ObjectMapper::map($this->mp3MuxingInformation, Mp3MuxingInformation::class);
        $this->mp4MuxingInformation = ObjectMapper::map($this->mp4MuxingInformation, Mp4MuxingInformation::class);
        $this->packedAudioMuxingInformation = ObjectMapper::map($this->packedAudioMuxingInformation, PackedAudioMuxingInformation::class);
        $this->progressiveMovMuxingInformation = ObjectMapper::map($this->progressiveMovMuxingInformation, ProgressiveMovMuxingInformation::class);
        $this->progressiveTsMuxingInformation = ObjectMapper::map($this->progressiveTsMuxingInformation, ProgressiveTsMuxingInformation::class);
        $this->progressiveWebmMuxingInformation = ObjectMapper::map($this->progressiveWebmMuxingInformation, ProgressiveWebmMuxingInformation::class);
    }

    /**
     * Muxing
     *
     * @param Muxing $muxing
     * @return $this
     */
    public function muxing(Muxing $muxing)
    {
        $this->muxing = $muxing;

        return $this;
    }

    /**
     * drms
     *
     * @param \BitmovinApiSdk\Models\Drm[] $drms
     * @return $this
     */
    public function drms(array $drms)
    {
        $this->drms = $drms;

        return $this;
    }

    /**
     * broadcastTsMuxingInformation
     *
     * @param BroadcastTsMuxingInformation $broadcastTsMuxingInformation
     * @return $this
     */
    public function broadcastTsMuxingInformation(BroadcastTsMuxingInformation $broadcastTsMuxingInformation)
    {
        $this->broadcastTsMuxingInformation = $broadcastTsMuxingInformation;

        return $this;
    }

    /**
     * fmp4MuxingInformation
     *
     * @param Fmp4MuxingInformation $fmp4MuxingInformation
     * @return $this
     */
    public function fmp4MuxingInformation(Fmp4MuxingInformation $fmp4MuxingInformation)
    {
        $this->fmp4MuxingInformation = $fmp4MuxingInformation;

        return $this;
    }

    /**
     * mp3MuxingInformation
     *
     * @param Mp3MuxingInformation $mp3MuxingInformation
     * @return $this
     */
    public function mp3MuxingInformation(Mp3MuxingInformation $mp3MuxingInformation)
    {
        $this->mp3MuxingInformation = $mp3MuxingInformation;

        return $this;
    }

    /**
     * mp4MuxingInformation
     *
     * @param Mp4MuxingInformation $mp4MuxingInformation
     * @return $this
     */
    public function mp4MuxingInformation(Mp4MuxingInformation $mp4MuxingInformation)
    {
        $this->mp4MuxingInformation = $mp4MuxingInformation;

        return $this;
    }

    /**
     * packedAudioMuxingInformation
     *
     * @param PackedAudioMuxingInformation $packedAudioMuxingInformation
     * @return $this
     */
    public function packedAudioMuxingInformation(PackedAudioMuxingInformation $packedAudioMuxingInformation)
    {
        $this->packedAudioMuxingInformation = $packedAudioMuxingInformation;

        return $this;
    }

    /**
     * progressiveMovMuxingInformation
     *
     * @param ProgressiveMovMuxingInformation $progressiveMovMuxingInformation
     * @return $this
     */
    public function progressiveMovMuxingInformation(ProgressiveMovMuxingInformation $progressiveMovMuxingInformation)
    {
        $this->progressiveMovMuxingInformation = $progressiveMovMuxingInformation;

        return $this;
    }

    /**
     * progressiveTsMuxingInformation
     *
     * @param ProgressiveTsMuxingInformation $progressiveTsMuxingInformation
     * @return $this
     */
    public function progressiveTsMuxingInformation(ProgressiveTsMuxingInformation $progressiveTsMuxingInformation)
    {
        $this->progressiveTsMuxingInformation = $progressiveTsMuxingInformation;

        return $this;
    }

    /**
     * progressiveWebmMuxingInformation
     *
     * @param ProgressiveWebmMuxingInformation $progressiveWebmMuxingInformation
     * @return $this
     */
    public function progressiveWebmMuxingInformation(ProgressiveWebmMuxingInformation $progressiveWebmMuxingInformation)
    {
        $this->progressiveWebmMuxingInformation = $progressiveWebmMuxingInformation;

        return $this;
    }
}

