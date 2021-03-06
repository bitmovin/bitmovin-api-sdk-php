<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Fmp4\Drm\Contentprotection;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ContentProtection;

class ContentProtectionPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ContentProtection[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ContentProtection::class);
    }
}
