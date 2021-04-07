<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BroadcastTsTransportConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $muxrate;

    /** @var bool */
    public $stopOnError;

    /** @var bool */
    public $preventEmptyAdaptionFieldsInVideo;

    /** @var float */
    public $patRepetitionRatePerSec;

    /** @var float */
    public $pmtRepetitionRatePerSec;

    /** @var bool */
    public $variableMuxRate;

    /** @var float */
    public $initialPresentationTimeStamp;

    /** @var float */
    public $initialProgramClockReference;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Output rate in bps. The value zero implies to use minimal rate. The minimal rate leaves approximately 15kbps of null packets in the stream.
     *
     * @param float $muxrate
     * @return $this
     */
    public function muxrate(float $muxrate)
    {
        $this->muxrate = $muxrate;

        return $this;
    }

    /**
     * Stop mux on errors. If true, implies halt multiplexing when any error is encountered. If false, errors are ignored and multiplexing continues. Note that the recovery from an error will usually result in an illegal transport stream and artifacts on a decoder.
     *
     * @param bool $stopOnError
     * @return $this
     */
    public function stopOnError(bool $stopOnError)
    {
        $this->stopOnError = $stopOnError;

        return $this;
    }

    /**
     * If true, prevents adaptation fields with length field equal to zero in video, i.e., zero-length AF. Please note that this condition can only occur when pesAlign for the input stream is set to true.
     *
     * @param bool $preventEmptyAdaptionFieldsInVideo
     * @return $this
     */
    public function preventEmptyAdaptionFieldsInVideo(bool $preventEmptyAdaptionFieldsInVideo)
    {
        $this->preventEmptyAdaptionFieldsInVideo = $preventEmptyAdaptionFieldsInVideo;

        return $this;
    }

    /**
     * Program Association Table (PAT) repetition rate per second. Number of PATs per second.
     *
     * @param float $patRepetitionRatePerSec
     * @return $this
     */
    public function patRepetitionRatePerSec(float $patRepetitionRatePerSec)
    {
        $this->patRepetitionRatePerSec = $patRepetitionRatePerSec;

        return $this;
    }

    /**
     * Program Map Table (PMT) repetition rate per second. Number of PMTs for each program per second.
     *
     * @param float $pmtRepetitionRatePerSec
     * @return $this
     */
    public function pmtRepetitionRatePerSec(float $pmtRepetitionRatePerSec)
    {
        $this->pmtRepetitionRatePerSec = $pmtRepetitionRatePerSec;

        return $this;
    }

    /**
     * When false, the output stream is created at a constant bit rate. When true, the output rate is allowed to vary from a maximum rate set by the muxrate parameter down to the minimum required to carry the stream.
     *
     * @param bool $variableMuxRate
     * @return $this
     */
    public function variableMuxRate(bool $variableMuxRate)
    {
        $this->variableMuxRate = $variableMuxRate;

        return $this;
    }

    /**
     * Sets the presentation time stamp value for the first video frame. The timestamp is specified in the timescale of 90000
     *
     * @param float $initialPresentationTimeStamp
     * @return $this
     */
    public function initialPresentationTimeStamp(float $initialPresentationTimeStamp)
    {
        $this->initialPresentationTimeStamp = $initialPresentationTimeStamp;

        return $this;
    }

    /**
     * Sets the Program Clock Reference value at the beginning of the first packet for the transport stream. The PCR is specified in the timescale of 90000
     *
     * @param float $initialProgramClockReference
     * @return $this
     */
    public function initialProgramClockReference(float $initialProgramClockReference)
    {
        $this->initialProgramClockReference = $initialProgramClockReference;

        return $this;
    }
}

