<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Subtitle;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SubtitleAdaptationSet;

class SubtitleAdaptationSetPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SubtitleAdaptationSet[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SubtitleAdaptationSet::class);
    }
}
