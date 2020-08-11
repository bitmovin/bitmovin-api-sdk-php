<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Subtitles\DvbSubtitle;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DvbSubtitleInputStream;

class DvbSubtitleInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DvbSubtitleInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DvbSubtitleInputStream::class);
    }
}
