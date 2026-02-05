<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyAtmosPreprocessing extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var DolbyAtmosDynamicRangeCompression */
    public $dynamicRangeCompression;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->dynamicRangeCompression = ObjectMapper::map($this->dynamicRangeCompression, DolbyAtmosDynamicRangeCompression::class);
    }

    /**
     * It indicates a gain change to be applied in the Dolby Atmos decoder in order to implement dynamic range compression.  The values typically indicate gain reductions (cut) during loud passages and gain increases (boost) during quiet passages based on desired compression characteristics.
     *
     * @param DolbyAtmosDynamicRangeCompression $dynamicRangeCompression
     * @return $this
     */
    public function dynamicRangeCompression(DolbyAtmosDynamicRangeCompression $dynamicRangeCompression)
    {
        $this->dynamicRangeCompression = $dynamicRangeCompression;

        return $this;
    }
}

