<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamInfo extends BitmovinResource
{
    /** @var string */
    public $audio;

    /** @var AudioGroupConfiguration */
    public $audioGroups;

    /** @var string */
    public $video;

    /** @var string */
    public $subtitles;

    /** @var string */
    public $closedCaptions;

    /** @var string */
    public $encodingId;

    /** @var string */
    public $streamId;

    /** @var string */
    public $muxingId;

    /** @var string */
    public $drmId;

    /** @var string */
    public $segmentPath;

    /** @var string */
    public $uri;

    /** @var int */
    public $startSegmentNumber;

    /** @var int */
    public $endSegmentNumber;

    /** @var bool */
    public $forceFrameRateAttribute;

    /** @var bool */
    public $forceVideoRangeAttribute;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->audioGroups = ObjectMapper::map($this->audioGroups, AudioGroupConfiguration::class);
    }

    /**
     * It MUST match the value of the GROUP-ID attribute of an Audio EXT-X-MEDIA tag elsewhere in the Master Playlist. Either this or &#x60;audioGroups&#x60; must be set.
     *
     * @param string $audio
     * @return $this
     */
    public function audio(string $audio)
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * HLS Audio Group Configuration. You will want to use this configuration property in case you specify conditions on audio streams. The first matching audio group will be used for the specific variant stream. Either this or &#x60;audio&#x60; must be set.
     *
     * @param AudioGroupConfiguration $audioGroups
     * @return $this
     */
    public function audioGroups(AudioGroupConfiguration $audioGroups)
    {
        $this->audioGroups = $audioGroups;

        return $this;
    }

    /**
     * It MUST match the value of the GROUP-ID attribute of a Video EXT-X-MEDIA tag elsewhere in the Master Playlist
     *
     * @param string $video
     * @return $this
     */
    public function video(string $video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * It MUST match the value of the GROUP-ID attribute of a Subtitles EXT-X-MEDIA tag elsewhere in the Master Playlist
     *
     * @param string $subtitles
     * @return $this
     */
    public function subtitles(string $subtitles)
    {
        $this->subtitles = $subtitles;

        return $this;
    }

    /**
     * If the value is not &#39;NONE&#39;, it MUST match the value of the GROUP-ID attribute of a Closed Captions EXT-X-MEDIA tag elsewhere in the Playlist (required)
     *
     * @param string $closedCaptions
     * @return $this
     */
    public function closedCaptions(string $closedCaptions)
    {
        $this->closedCaptions = $closedCaptions;

        return $this;
    }

    /**
     * Id of the encoding. (required)
     *
     * @param string $encodingId
     * @return $this
     */
    public function encodingId(string $encodingId)
    {
        $this->encodingId = $encodingId;

        return $this;
    }

    /**
     * Id of the stream. (required)
     *
     * @param string $streamId
     * @return $this
     */
    public function streamId(string $streamId)
    {
        $this->streamId = $streamId;

        return $this;
    }

    /**
     * Id of the muxing. (required)
     *
     * @param string $muxingId
     * @return $this
     */
    public function muxingId(string $muxingId)
    {
        $this->muxingId = $muxingId;

        return $this;
    }

    /**
     * Id of the DRM.
     *
     * @param string $drmId
     * @return $this
     */
    public function drmId(string $drmId)
    {
        $this->drmId = $drmId;

        return $this;
    }

    /**
     * Path to segments. (required)
     *
     * @param string $segmentPath
     * @return $this
     */
    public function segmentPath(string $segmentPath)
    {
        $this->segmentPath = $segmentPath;

        return $this;
    }

    /**
     * The URI of the playlist file. (required)
     *
     * @param string $uri
     * @return $this
     */
    public function uri(string $uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Number of the first segment. Default is 0.
     *
     * @param int $startSegmentNumber
     * @return $this
     */
    public function startSegmentNumber(int $startSegmentNumber)
    {
        $this->startSegmentNumber = $startSegmentNumber;

        return $this;
    }

    /**
     * Number of the last segment. Default is the last one that was encoded.
     *
     * @param int $endSegmentNumber
     * @return $this
     */
    public function endSegmentNumber(int $endSegmentNumber)
    {
        $this->endSegmentNumber = $endSegmentNumber;

        return $this;
    }

    /**
     * Force the addition of the frame rate attribute to all stream infos.
     *
     * @param bool $forceFrameRateAttribute
     * @return $this
     */
    public function forceFrameRateAttribute(bool $forceFrameRateAttribute)
    {
        $this->forceFrameRateAttribute = $forceFrameRateAttribute;

        return $this;
    }

    /**
     * Force the addition of the video-range attribute to all stream infos.
     *
     * @param bool $forceVideoRangeAttribute
     * @return $this
     */
    public function forceVideoRangeAttribute(bool $forceVideoRangeAttribute)
    {
        $this->forceVideoRangeAttribute = $forceVideoRangeAttribute;

        return $this;
    }
}

