<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccVerdictShare extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var PccVerdict */
    public $verdict;

    /** @var string */
    public $label;

    /** @var float */
    public $cells;

    /** @var bool */
    public $aboutTheDevice;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->verdict = ObjectMapper::map($this->verdict, PccVerdict::class);
    }

    /**
     * verdict
     *
     * @param PccVerdict $verdict
     * @return $this
     */
    public function verdict(PccVerdict $verdict)
    {
        $this->verdict = $verdict;

        return $this;
    }

    /**
     * The reader&#39;s word for it. (required)
     *
     * @param string $label
     * @return $this
     */
    public function label(string $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Cells sharing this label, including verdicts grouped under &#x60;Not measured&#x60;. (required)
     *
     * @param float $cells
     * @return $this
     */
    public function cells(float $cells)
    {
        $this->cells = $cells;

        return $this;
    }

    /**
     * False where the verdict says something about the measurement, not about the device. (required)
     *
     * @param bool $aboutTheDevice
     * @return $this
     */
    public function aboutTheDevice(bool $aboutTheDevice)
    {
        $this->aboutTheDevice = $aboutTheDevice;

        return $this;
    }
}

