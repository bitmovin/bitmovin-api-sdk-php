<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Vod\Daily;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\EncodingStatistics;

class EncodingStatisticsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var EncodingStatistics[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, EncodingStatistics::class);
    }
}
