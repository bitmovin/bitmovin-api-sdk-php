<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class FragmentedMuxingInformation extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $mimeType;

    /** @var int */
    public $fileSize;

    /** @var string */
    public $containerFormat;

    /** @var int */
    public $containerBitrate;

    /** @var float */
    public $duration;

    /** @var \BitmovinApiSdk\Models\MuxingInformationVideoTrack[] */
    public $videoTracks;

    /** @var \BitmovinApiSdk\Models\MuxingInformationAudioTrack[] */
    public $audioTracks;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->videoTracks = ObjectMapper::map($this->videoTracks, MuxingInformationVideoTrack::class);
        $this->audioTracks = ObjectMapper::map($this->audioTracks, MuxingInformationAudioTrack::class);
    }
}

