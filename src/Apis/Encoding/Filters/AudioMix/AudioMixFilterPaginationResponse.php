<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\AudioMix;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AudioMixFilter;

class AudioMixFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AudioMixFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AudioMixFilter::class);
    }
}
