<?php

namespace BitmovinApiSdk\Apis\Encoding\Simple\Jobs\Vod;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SimpleEncodingVodJobResponse;

class SimpleEncodingVodJobResponsePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SimpleEncodingVodJobResponse[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SimpleEncodingVodJobResponse::class);
    }
}
