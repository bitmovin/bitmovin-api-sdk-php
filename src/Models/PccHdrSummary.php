<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccHdrSummary extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\PccHdrOutcomeCount[] */
    public $outcomes;

    /** @var \BitmovinApiSdk\Models\PccHdrDevice[] */
    public $byDevice;

    /** @var \BitmovinApiSdk\Models\PccHdrShare[] */
    public $shares;

    /** @var float */
    public $passes;

    /** @var float */
    public $unreported;

    /** @var float */
    public $established;

    /** @var \BitmovinApiSdk\Models\PccHdrFinding[] */
    public $findings;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->outcomes = ObjectMapper::map($this->outcomes, PccHdrOutcomeCount::class);
        $this->byDevice = ObjectMapper::map($this->byDevice, PccHdrDevice::class);
        $this->shares = ObjectMapper::map($this->shares, PccHdrShare::class);
        $this->findings = ObjectMapper::map($this->findings, PccHdrFinding::class);
    }

    /**
     * outcomes
     *
     * @param \BitmovinApiSdk\Models\PccHdrOutcomeCount[] $outcomes
     * @return $this
     */
    public function outcomes(array $outcomes)
    {
        $this->outcomes = $outcomes;

        return $this;
    }

    /**
     * Selected device pools with at least one HDR playback pass. (required)
     *
     * @param \BitmovinApiSdk\Models\PccHdrDevice[] $byDevice
     * @return $this
     */
    public function byDevice(array $byDevice)
    {
        $this->byDevice = $byDevice;

        return $this;
    }

    /**
     * shares
     *
     * @param \BitmovinApiSdk\Models\PccHdrShare[] $shares
     * @return $this
     */
    public function shares(array $shares)
    {
        $this->shares = $shares;

        return $this;
    }

    /**
     * HDR passes in the report. The picture question does not arise on a cell that failed. (required)
     *
     * @param float $passes
     * @return $this
     */
    public function passes(float $passes)
    {
        $this->passes = $passes;

        return $this;
    }

    /**
     * Passes carrying no reading at all, so a missing measurement never reads as a level of confidence. (required)
     *
     * @param float $unreported
     * @return $this
     */
    public function unreported(float $unreported)
    {
        $this->unreported = $unreported;

        return $this;
    }

    /**
     * Passes where some instrument answered — frames read, or the device&#39;s own word. The &#x60;evidence&#x60; and &#x60;claim&#x60; shares above, added together. (required)
     *
     * @param float $established
     * @return $this
     */
    public function established(float $established)
    {
        $this->established = $established;

        return $this;
    }

    /**
     * findings
     *
     * @param \BitmovinApiSdk\Models\PccHdrFinding[] $findings
     * @return $this
     */
    public function findings(array $findings)
    {
        $this->findings = $findings;

        return $this;
    }
}

