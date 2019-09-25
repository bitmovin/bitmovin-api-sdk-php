<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\Srt;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\BurnInSubtitleSrt;

class BurnInSubtitleSrtPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var BurnInSubtitleSrt[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, BurnInSubtitleSrt::class);
    }
}
