<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Subtitles\DvbTeletext;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DvbTeletextInputStream;

class DvbTeletextInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DvbTeletextInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DvbTeletextInputStream::class);
    }
}
