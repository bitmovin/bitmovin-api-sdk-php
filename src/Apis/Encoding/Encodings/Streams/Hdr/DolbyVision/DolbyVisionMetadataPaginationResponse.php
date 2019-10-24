<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Hdr\DolbyVision;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DolbyVisionMetadata;

class DolbyVisionMetadataPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DolbyVisionMetadata[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DolbyVisionMetadata::class);
    }
}
