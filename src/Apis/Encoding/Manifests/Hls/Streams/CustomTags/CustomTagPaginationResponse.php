<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Streams\CustomTags;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\CustomTag;

class CustomTagPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var CustomTag[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, CustomTag::class);
    }
}
