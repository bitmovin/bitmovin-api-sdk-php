<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SubtaskMetadata extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $date;

    /** @var \BitmovinApiSdk\Models\SubtaskMetadataData */
    public $data;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->date = ObjectMapper::map($this->date, Carbon::class);
        $this->data = ObjectMapper::map($this->data, SubtaskMetadataData::class);
    }

    /**
     * The timestamp of the metadata record (required)
     *
     * @param Carbon $date
     * @return $this
     */
    public function date(Carbon $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * data
     *
     * @param \BitmovinApiSdk\Models\SubtaskMetadataData $data
     * @return $this
     */
    public function data(\BitmovinApiSdk\Models\SubtaskMetadataData $data)
    {
        $this->data = $data;

        return $this;
    }
}

