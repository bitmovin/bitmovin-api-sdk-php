<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\DolbyAtmos;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DolbyAtmosIngestInputStream;

class DolbyAtmosIngestInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DolbyAtmosIngestInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DolbyAtmosIngestInputStream::class);
    }
}
