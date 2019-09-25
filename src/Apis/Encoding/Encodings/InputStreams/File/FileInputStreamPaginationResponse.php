<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\File;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\FileInputStream;

class FileInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var FileInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, FileInputStream::class);
    }
}
