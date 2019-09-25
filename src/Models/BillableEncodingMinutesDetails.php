<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BillableEncodingMinutesDetails extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $uNKNOWN;

    /** @var float */
    public $aUDIO;

    /** @var float */
    public $sD;

    /** @var float */
    public $hD;

    /** @var float */
    public $uHD;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Only set if resolution information is not present.
     *
     * @param float $uNKNOWN
     * @return $this
     */
    public function uNKNOWN(float $uNKNOWN)
    {
        $this->uNKNOWN = $uNKNOWN;

        return $this;
    }

    /**
     * Billable minutes for audio. Available if stream is an audio stream.
     *
     * @param float $aUDIO
     * @return $this
     */
    public function aUDIO(float $aUDIO)
    {
        $this->aUDIO = $aUDIO;

        return $this;
    }

    /**
     * Billable minutes for SD resolutions.
     *
     * @param float $sD
     * @return $this
     */
    public function sD(float $sD)
    {
        $this->sD = $sD;

        return $this;
    }

    /**
     * Billable minutes for HD resolutions.
     *
     * @param float $hD
     * @return $this
     */
    public function hD(float $hD)
    {
        $this->hD = $hD;

        return $this;
    }

    /**
     * Billable minutes for UHD resolutions.
     *
     * @param float $uHD
     * @return $this
     */
    public function uHD(float $uHD)
    {
        $this->uHD = $uHD;

        return $this;
    }
}

