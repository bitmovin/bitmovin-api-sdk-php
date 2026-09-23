<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\LiveAnalyses;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class AiSceneAnalysisLiveResponseListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AiSceneAnalysisLiveResponseListQueryParams
     */
    public static function create(): AiSceneAnalysisLiveResponseListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AiSceneAnalysisLiveResponseListQueryParams
     */
    public function offset(int $offset): AiSceneAnalysisLiveResponseListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AiSceneAnalysisLiveResponseListQueryParams
     */
    public function limit(int $limit): AiSceneAnalysisLiveResponseListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    public function toArray(): array
    {
        return array_map(function ($value) {
            if($value instanceof Carbon)
            {
                return $value->utc()->toIso8601ZuluString();
            }

            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));
    }
}
