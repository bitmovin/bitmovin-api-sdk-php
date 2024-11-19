<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StandbyPools;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\LiveStandbyPoolResponse;

class LiveStandbyPoolResponsePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var LiveStandbyPoolResponse[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, LiveStandbyPoolResponse::class);
    }
}
