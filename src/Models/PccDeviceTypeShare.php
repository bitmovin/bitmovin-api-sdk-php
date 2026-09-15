<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccDeviceTypeShare extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $label;

    /** @var float */
    public $played;

    /** @var float */
    public $measured;

    /** @var float */
    public $models;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The device type reported by the fleet. (required)
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
     * Cells that played, across device pools of this kind. (required)
     *
     * @param float $played
     * @return $this
     */
    public function played(float $played)
    {
        $this->played = $played;

        return $this;
    }

    /**
     * Cells with a device-answering verdict, across pools of this kind. The denominator. (required)
     *
     * @param float $measured
     * @return $this
     */
    public function measured(float $measured)
    {
        $this->measured = $measured;

        return $this;
    }

    /**
     * Device pools of this kind with at least one device-answering verdict. (required)
     *
     * @param float $models
     * @return $this
     */
    public function models(float $models)
    {
        $this->models = $models;

        return $this;
    }
}

