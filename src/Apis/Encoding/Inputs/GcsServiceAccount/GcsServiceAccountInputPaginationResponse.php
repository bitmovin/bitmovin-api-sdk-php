<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\GcsServiceAccount;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\GcsServiceAccountInput;

class GcsServiceAccountInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var GcsServiceAccountInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, GcsServiceAccountInput::class);
    }
}
