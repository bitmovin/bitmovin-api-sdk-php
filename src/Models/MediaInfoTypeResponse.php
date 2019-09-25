<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class MediaInfoTypeResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var MediaInfoType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->type = ObjectMapper::map($this->type, MediaInfoType::class);
    }

    /**
     * The type of the media-info
     *
     * @param MediaInfoType $type
     * @return $this
     */
    public function type(MediaInfoType $type)
    {
        $this->type = $type;

        return $this;
    }
}

