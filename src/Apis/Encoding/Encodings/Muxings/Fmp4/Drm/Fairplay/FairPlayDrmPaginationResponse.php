<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Fairplay;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\FairPlayDrm;

class FairPlayDrmPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var FairPlayDrm[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, FairPlayDrm::class);
    }
}
