<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccHdrDevice extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $key;

    /** @var string */
    public $name;

    /** @var string */
    public $qualifier;

    /** @var float */
    public $passes;

    /** @var PccDeviceHdrVerdict */
    public $verdict;

    /** @var \BitmovinApiSdk\Models\PccHdrOutcomeCount[] */
    public $outcomes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->verdict = ObjectMapper::map($this->verdict, PccDeviceHdrVerdict::class);
        $this->outcomes = ObjectMapper::map($this->outcomes, PccHdrOutcomeCount::class);
    }

    /**
     * Opaque stable pool key for row identity. Do not display it as a device name. (required)
     *
     * @param string $key
     * @return $this
     */
    public function key(string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * name
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * qualifier
     *
     * @param string $qualifier
     * @return $this
     */
    public function qualifier(string $qualifier)
    {
        $this->qualifier = $qualifier;

        return $this;
    }

    /**
     * All selected HDR playback passes for this device pool. (required)
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
     * Service-resolved verdict: negative findings outrank positive results. Null when no pass carries an HDR reading. (required)
     *
     * @param PccDeviceHdrVerdict $verdict
     * @return $this
     */
    public function verdict(PccDeviceHdrVerdict $verdict)
    {
        $this->verdict = $verdict;

        return $this;
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
}

