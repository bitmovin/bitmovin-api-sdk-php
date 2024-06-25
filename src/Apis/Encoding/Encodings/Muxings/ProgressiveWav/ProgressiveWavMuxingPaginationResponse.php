<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveWav;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ProgressiveWavMuxing;

class ProgressiveWavMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ProgressiveWavMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ProgressiveWavMuxing::class);
    }
}
