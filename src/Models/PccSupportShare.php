<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccSupportShare extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $label;

    /** @var float */
    public $played;

    /** @var float */
    public $measured;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * What this share counts, in words rather than in codes. (required)
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
     * Device pools that played it. (required)
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
     * Device pools that answered either way. The denominator, never the fleet size. (required)
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

