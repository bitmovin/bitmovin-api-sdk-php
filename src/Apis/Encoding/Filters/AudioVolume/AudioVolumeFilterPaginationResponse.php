<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\AudioVolume;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AudioVolumeFilter;

class AudioVolumeFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AudioVolumeFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AudioVolumeFilter::class);
    }
}
