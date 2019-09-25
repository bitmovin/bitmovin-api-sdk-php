<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Vod;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\EncodingStatisticsVod;

class EncodingStatisticsVodPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var EncodingStatisticsVod[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, EncodingStatisticsVod::class);
    }
}
