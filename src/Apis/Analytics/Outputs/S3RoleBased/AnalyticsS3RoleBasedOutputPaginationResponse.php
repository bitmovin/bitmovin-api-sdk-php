<?php

namespace BitmovinApiSdk\Apis\Analytics\Outputs\S3RoleBased;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AnalyticsS3RoleBasedOutput;

class AnalyticsS3RoleBasedOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AnalyticsS3RoleBasedOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AnalyticsS3RoleBasedOutput::class);
    }
}
