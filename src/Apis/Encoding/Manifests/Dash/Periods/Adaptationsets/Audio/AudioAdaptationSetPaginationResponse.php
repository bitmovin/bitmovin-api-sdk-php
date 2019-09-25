<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Audio;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AudioAdaptationSet;

class AudioAdaptationSetPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AudioAdaptationSet[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AudioAdaptationSet::class);
    }
}
