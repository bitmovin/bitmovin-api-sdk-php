<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Ingest;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\IngestInputStream;

class IngestInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var IngestInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, IngestInputStream::class);
    }
}
