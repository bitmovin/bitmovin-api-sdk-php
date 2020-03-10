<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashMp4Representation extends DashRepresentation
{
    /** @var string */
    public $filePath;

    /** @var DashOnDemandRepresentationType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, DashOnDemandRepresentationType::class);
    }

    /**
     * Path to the MP4 file (required)
     *
     * @param string $filePath
     * @return $this
     */
    public function filePath(string $filePath)
    {
        $this->filePath = $filePath;

        return $this;
    }

    /**
     * The type of the dash representation
     *
     * @param DashOnDemandRepresentationType $type
     * @return $this
     */
    public function type(DashOnDemandRepresentationType $type)
    {
        $this->type = $type;

        return $this;
    }
}

