<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\Dvbsub;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\BurnInSubtitleDvbSub;

class BurnInSubtitleDvbSubPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var BurnInSubtitleDvbSub[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, BurnInSubtitleDvbSub::class);
    }
}
