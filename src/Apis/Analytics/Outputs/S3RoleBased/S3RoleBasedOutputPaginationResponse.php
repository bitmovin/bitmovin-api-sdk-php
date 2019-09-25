<?php

namespace BitmovinApiSdk\Apis\Analytics\Outputs\S3RoleBased;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\S3RoleBasedOutput;

class S3RoleBasedOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var S3RoleBasedOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, S3RoleBasedOutput::class);
    }
}
