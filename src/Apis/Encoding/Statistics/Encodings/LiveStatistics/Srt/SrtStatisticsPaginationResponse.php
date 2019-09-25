<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Srt;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SrtStatistics;

class SrtStatisticsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SrtStatistics[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SrtStatistics::class);
    }
}
