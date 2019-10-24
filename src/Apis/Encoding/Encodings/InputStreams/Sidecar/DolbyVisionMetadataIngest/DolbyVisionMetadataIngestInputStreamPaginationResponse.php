<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Sidecar\DolbyVisionMetadataIngest;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DolbyVisionMetadataIngestInputStream;

class DolbyVisionMetadataIngestInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DolbyVisionMetadataIngestInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DolbyVisionMetadataIngestInputStream::class);
    }
}
