<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DashManifest;

class DashManifestPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DashManifest[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DashManifest::class);
    }
}
