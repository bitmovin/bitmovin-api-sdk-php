<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BillableEncodingMinutesDetails extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $UNKNOWN;

    /** @var float */
    public $AUDIO;

    /** @var float */
    public $SD;

    /** @var float */
    public $HD;

    /** @var float */
    public $UHD;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Only set if resolution information is not present.
     *
     * @param float $UNKNOWN
     * @return $this
     */
    public function UNKNOWN(float $UNKNOWN)
    {
        $this->UNKNOWN = $UNKNOWN;

        return $this;
    }

    /**
     * Billable minutes for audio. Available if stream is an audio stream.
     *
     * @param float $AUDIO
     * @return $this
     */
    public function AUDIO(float $AUDIO)
    {
        $this->AUDIO = $AUDIO;

        return $this;
    }

    /**
     * Billable minutes for SD resolutions.
     *
     * @param float $SD
     * @return $this
     */
    public function SD(float $SD)
    {
        $this->SD = $SD;

        return $this;
    }

    /**
     * Billable minutes for HD resolutions.
     *
     * @param float $HD
     * @return $this
     */
    public function HD(float $HD)
    {
        $this->HD = $HD;

        return $this;
    }

    /**
     * Billable minutes for UHD resolutions.
     *
     * @param float $UHD
     * @return $this
     */
    public function UHD(float $UHD)
    {
        $this->UHD = $UHD;

        return $this;
    }
}

