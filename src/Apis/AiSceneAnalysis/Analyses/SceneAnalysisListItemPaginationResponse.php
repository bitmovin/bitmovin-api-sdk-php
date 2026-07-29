<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SceneAnalysisListItem;

class SceneAnalysisListItemPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SceneAnalysisListItem[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SceneAnalysisListItem::class);
    }
}
