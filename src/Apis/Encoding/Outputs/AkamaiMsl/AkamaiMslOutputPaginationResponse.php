<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\AkamaiMsl;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AkamaiMslOutput;

class AkamaiMslOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AkamaiMslOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AkamaiMslOutput::class);
    }
}
