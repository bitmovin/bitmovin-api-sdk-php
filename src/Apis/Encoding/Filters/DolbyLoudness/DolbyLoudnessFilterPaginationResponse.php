<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\DolbyLoudness;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DolbyLoudnessFilter;

class DolbyLoudnessFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DolbyLoudnessFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DolbyLoudnessFilter::class);
    }
}
