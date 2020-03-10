<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EgressInformation extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\EgressCategory */
    public $category;

    /** @var int */
    public $bytes;

    /** @var \BitmovinApiSdk\Models\OutputType */
    public $outputType;

    /** @var \BitmovinApiSdk\Models\CloudRegion */
    public $outputRegion;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->category = ObjectMapper::map($this->category, EgressCategory::class);
        $this->outputType = ObjectMapper::map($this->outputType, OutputType::class);
        $this->outputRegion = ObjectMapper::map($this->outputRegion, CloudRegion::class);
    }

    /**
     * category
     *
     * @param \BitmovinApiSdk\Models\EgressCategory $category
     * @return $this
     */
    public function category(\BitmovinApiSdk\Models\EgressCategory $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * The number of bytes that have been transferred to the output (required)
     *
     * @param int $bytes
     * @return $this
     */
    public function bytes(int $bytes)
    {
        $this->bytes = $bytes;

        return $this;
    }

    /**
     * outputType
     *
     * @param \BitmovinApiSdk\Models\OutputType $outputType
     * @return $this
     */
    public function outputType(\BitmovinApiSdk\Models\OutputType $outputType)
    {
        $this->outputType = $outputType;

        return $this;
    }

    /**
     * outputRegion
     *
     * @param \BitmovinApiSdk\Models\CloudRegion $outputRegion
     * @return $this
     */
    public function outputRegion(\BitmovinApiSdk\Models\CloudRegion $outputRegion)
    {
        $this->outputRegion = $outputRegion;

        return $this;
    }
}

