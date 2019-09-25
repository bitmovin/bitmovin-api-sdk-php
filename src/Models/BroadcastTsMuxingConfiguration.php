<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BroadcastTsMuxingConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var BroadcastTsTransportConfiguration */
    public $transport;

    /** @var BroadcastTsProgramConfiguration */
    public $program;

    /** @var \BitmovinApiSdk\Models\BroadcastTsVideoInputStreamConfiguration[] */
    public $videoStreams;

    /** @var \BitmovinApiSdk\Models\BroadcastTsAudioInputStreamConfiguration[] */
    public $audioStreams;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->transport = ObjectMapper::map($this->transport, BroadcastTsTransportConfiguration::class);
        $this->program = ObjectMapper::map($this->program, BroadcastTsProgramConfiguration::class);
        $this->videoStreams = ObjectMapper::map($this->videoStreams, BroadcastTsVideoInputStreamConfiguration::class);
        $this->audioStreams = ObjectMapper::map($this->audioStreams, BroadcastTsAudioInputStreamConfiguration::class);
    }

    /**
     * Transport configuration details for the Broadcast TS muxing.
     *
     * @param BroadcastTsTransportConfiguration $transport
     * @return $this
     */
    public function transport(BroadcastTsTransportConfiguration $transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Program configuration details for the Broadcast TS muxing.
     *
     * @param BroadcastTsProgramConfiguration $program
     * @return $this
     */
    public function program(BroadcastTsProgramConfiguration $program)
    {
        $this->program = $program;

        return $this;
    }

    /**
     * videoStreams
     *
     * @param \BitmovinApiSdk\Models\BroadcastTsVideoInputStreamConfiguration[] $videoStreams
     * @return $this
     */
    public function videoStreams(array $videoStreams)
    {
        $this->videoStreams = $videoStreams;

        return $this;
    }

    /**
     * audioStreams
     *
     * @param \BitmovinApiSdk\Models\BroadcastTsAudioInputStreamConfiguration[] $audioStreams
     * @return $this
     */
    public function audioStreams(array $audioStreams)
    {
        $this->audioStreams = $audioStreams;

        return $this;
    }
}

