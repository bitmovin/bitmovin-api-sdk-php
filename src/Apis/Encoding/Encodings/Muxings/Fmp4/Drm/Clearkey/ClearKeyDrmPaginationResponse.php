<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Clearkey;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ClearKeyDrm;

class ClearKeyDrmPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ClearKeyDrm[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ClearKeyDrm::class);
    }
}
