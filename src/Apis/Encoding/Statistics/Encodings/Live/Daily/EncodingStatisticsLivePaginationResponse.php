<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\Live\Daily;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\EncodingStatisticsLive;

class EncodingStatisticsLivePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var EncodingStatisticsLive[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, EncodingStatisticsLive::class);
    }
}
