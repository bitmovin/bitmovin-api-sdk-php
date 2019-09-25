<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Webm\Drm\Cenc;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\CencDrm;

class CencDrmPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var CencDrm[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, CencDrm::class);
    }
}
