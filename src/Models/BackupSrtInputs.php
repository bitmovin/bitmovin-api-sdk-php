<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BackupSrtInputs extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $delayThreshold;

    /** @var \BitmovinApiSdk\Models\SrtInput[] */
    public $srtInputs;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->srtInputs = ObjectMapper::map($this->srtInputs, SrtInput::class);
    }

    /**
     * When there is no input signal present for this number of seconds, the encoder will switch to the next input
     *
     * @param int $delayThreshold
     * @return $this
     */
    public function delayThreshold(int $delayThreshold)
    {
        $this->delayThreshold = $delayThreshold;

        return $this;
    }

    /**
     * srtInputs
     *
     * @param \BitmovinApiSdk\Models\SrtInput[] $srtInputs
     * @return $this
     */
    public function srtInputs(array $srtInputs)
    {
        $this->srtInputs = $srtInputs;

        return $this;
    }
}

