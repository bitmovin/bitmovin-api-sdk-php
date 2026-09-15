<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccCodecDeviceTypeReach extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $deviceType;

    /** @var float */
    public $played;

    /** @var float */
    public $measured;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function deviceType(string $deviceType)
    {
        $this->deviceType = $deviceType;

        return $this;
    }

    /**
     * Distinct selected device pools that played this codec. (required)
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
     * Distinct selected pools that answered about this codec. A protection-only refusal is excluded. (required)
     *
     * @param float $measured
     * @return $this
     */
    public function measured(float $measured)
    {
        $this->measured = $measured;

        return $this;
    }
}

