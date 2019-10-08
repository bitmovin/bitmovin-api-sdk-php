<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Cmaf\Drm\Speke;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SpekeDrm;

class SpekeDrmPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SpekeDrm[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SpekeDrm::class);
    }
}
