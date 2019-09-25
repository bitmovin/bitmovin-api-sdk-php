<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TsMuxingConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $programNumber;

    /** @var TsProgramMapTableConfiguration */
    public $pmt;

    /** @var TsProgramClockReferenceConfiguration */
    public $pcr;

    /** @var \BitmovinApiSdk\Models\TsVideoStreamConfiguration[] */
    public $videoStreams;

    /** @var \BitmovinApiSdk\Models\TsAudioStreamConfiguration[] */
    public $audioStreams;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->pmt = ObjectMapper::map($this->pmt, TsProgramMapTableConfiguration::class);
        $this->pcr = ObjectMapper::map($this->pcr, TsProgramClockReferenceConfiguration::class);
        $this->videoStreams = ObjectMapper::map($this->videoStreams, TsVideoStreamConfiguration::class);
        $this->audioStreams = ObjectMapper::map($this->audioStreams, TsAudioStreamConfiguration::class);
    }

    /**
     * An integer value. Value for program_number field in the MPEG Transport Stream Program Map Table (PMT). The value zero is reserved for the NIT PID entry in the PAT.
     *
     * @param int $programNumber
     * @return $this
     */
    public function programNumber(int $programNumber)
    {
        $this->programNumber = $programNumber;

        return $this;
    }

    /**
     * pmt
     *
     * @param TsProgramMapTableConfiguration $pmt
     * @return $this
     */
    public function pmt(TsProgramMapTableConfiguration $pmt)
    {
        $this->pmt = $pmt;

        return $this;
    }

    /**
     * pcr
     *
     * @param TsProgramClockReferenceConfiguration $pcr
     * @return $this
     */
    public function pcr(TsProgramClockReferenceConfiguration $pcr)
    {
        $this->pcr = $pcr;

        return $this;
    }

    /**
     * videoStreams
     *
     * @param \BitmovinApiSdk\Models\TsVideoStreamConfiguration[] $videoStreams
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
     * @param \BitmovinApiSdk\Models\TsAudioStreamConfiguration[] $audioStreams
     * @return $this
     */
    public function audioStreams(array $audioStreams)
    {
        $this->audioStreams = $audioStreams;

        return $this;
    }
}

