<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Video;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\VideoAdaptationSet;

class VideoAdaptationSetPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var VideoAdaptationSet[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, VideoAdaptationSet::class);
    }
}
