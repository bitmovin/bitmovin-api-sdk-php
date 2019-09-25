<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BroadcastTsProgramConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $programNumber;

    /** @var int */
    public $pidForPMT;

    /** @var bool */
    public $insertProgramClockRefOnPes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * An integer value. Value for program_number field in Program Map Table (PMT). The value zero is reserved for the NIT PID entry in the PAT.
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
     * An integer value. Packet identifier (PID) to use for Program Map Table (PMT). Recommended value is 2 x programNumber.
     *
     * @param int $pidForPMT
     * @return $this
     */
    public function pidForPMT(int $pidForPMT)
    {
        $this->pidForPMT = $pidForPMT;

        return $this;
    }

    /**
     * Insert Program Clock References (PCRs) on all packetized elemementary stream packets. When false, indicates that PCRs should be inserted on every PES header. This parameter is effective only when the PCR packet identifier is the same as a video or audio elementary stream.
     *
     * @param bool $insertProgramClockRefOnPes
     * @return $this
     */
    public function insertProgramClockRefOnPes(bool $insertProgramClockRefOnPes)
    {
        $this->insertProgramClockRefOnPes = $insertProgramClockRefOnPes;

        return $this;
    }
}

