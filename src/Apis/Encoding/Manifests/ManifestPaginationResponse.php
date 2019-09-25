<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Manifest;

class ManifestPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Manifest[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Manifest::class);
    }
}
