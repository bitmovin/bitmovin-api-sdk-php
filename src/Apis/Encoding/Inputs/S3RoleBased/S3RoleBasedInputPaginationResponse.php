<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\S3RoleBased;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\S3RoleBasedInput;

class S3RoleBasedInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var S3RoleBasedInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, S3RoleBasedInput::class);
    }
}
