<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\GcsServiceAccount;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\GcsServiceAccountOutput;

class GcsServiceAccountOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var GcsServiceAccountOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, GcsServiceAccountOutput::class);
    }
}
