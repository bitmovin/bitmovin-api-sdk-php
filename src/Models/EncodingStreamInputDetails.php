<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingStreamInputDetails extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $formatName;

    /** @var float */
    public $startTime;

    /** @var float */
    public $duration;

    /** @var int */
    public $size;

    /** @var int */
    public $bitrate;

    /** @var mixed */
    public $tags;

    /** @var \BitmovinApiSdk\Models\VideoStream[] */
    public $videoStreams;

    /** @var \BitmovinApiSdk\Models\AudioStream[] */
    public $audioStreams;

    /** @var \BitmovinApiSdk\Models\MediaStream[] */
    public $metaStreams;

    /** @var \BitmovinApiSdk\Models\SubtitleStream[] */
    public $subtitleStreams;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->videoStreams = ObjectMapper::map($this->videoStreams, VideoStream::class);
        $this->audioStreams = ObjectMapper::map($this->audioStreams, AudioStream::class);
        $this->metaStreams = ObjectMapper::map($this->metaStreams, MediaStream::class);
        $this->subtitleStreams = ObjectMapper::map($this->subtitleStreams, SubtitleStream::class);
    }

    /**
     * Additional metadata saved in the input file
     *
     * @param mixed $tags
     * @return $this
     */
    public function tags(array $tags)
    {
        $this->tags = $tags;

        return $this;
    }
}

