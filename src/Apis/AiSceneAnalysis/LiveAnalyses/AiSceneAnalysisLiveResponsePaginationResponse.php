<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\LiveAnalyses;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AiSceneAnalysisLiveResponse;

class AiSceneAnalysisLiveResponsePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AiSceneAnalysisLiveResponse[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AiSceneAnalysisLiveResponse::class);
    }
}
