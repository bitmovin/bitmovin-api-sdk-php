<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Cdn;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\CdnOutput;

class CdnOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var CdnOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, CdnOutput::class);
    }
}
