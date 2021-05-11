<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Image;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ImageAdaptationSet;

class ImageAdaptationSetPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ImageAdaptationSet[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ImageAdaptationSet::class);
    }
}
