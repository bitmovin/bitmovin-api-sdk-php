<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Webm\Drm;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Drm;

class DrmPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Drm[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Drm::class);
    }
}
