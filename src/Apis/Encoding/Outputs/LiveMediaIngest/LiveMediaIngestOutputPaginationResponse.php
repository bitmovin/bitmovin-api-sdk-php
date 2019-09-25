<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\LiveMediaIngest;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\LiveMediaIngestOutput;

class LiveMediaIngestOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var LiveMediaIngestOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, LiveMediaIngestOutput::class);
    }
}
