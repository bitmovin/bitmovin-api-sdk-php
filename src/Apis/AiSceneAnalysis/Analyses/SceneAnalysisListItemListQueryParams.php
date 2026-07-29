<?php

namespace BitmovinApiSdk\Apis\AiSceneAnalysis\Analyses;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;
use \BitmovinApiSdk\Models\SceneAnalysisListSort;

class SceneAnalysisListItemListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var SceneAnalysisListSort */
    private $sort;

    /** @var Carbon */
    private $createdAtFrom;

    /** @var Carbon */
    private $createdAtTo;

    /**
     * @return SceneAnalysisListItemListQueryParams
     */
    public static function create(): SceneAnalysisListItemListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SceneAnalysisListItemListQueryParams
     */
    public function offset(int $offset): SceneAnalysisListItemListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SceneAnalysisListItemListQueryParams
     */
    public function limit(int $limit): SceneAnalysisListItemListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param SceneAnalysisListSort $sort
     * @return SceneAnalysisListItemListQueryParams
     */
    public function sort(SceneAnalysisListSort $sort): SceneAnalysisListItemListQueryParams
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param Carbon $createdAtFrom
     * @return SceneAnalysisListItemListQueryParams
     */
    public function createdAtFrom(Carbon $createdAtFrom): SceneAnalysisListItemListQueryParams
    {
        $this->createdAtFrom = $createdAtFrom;

        return $this;
    }

    /**
     * @param Carbon $createdAtTo
     * @return SceneAnalysisListItemListQueryParams
     */
    public function createdAtTo(Carbon $createdAtTo): SceneAnalysisListItemListQueryParams
    {
        $this->createdAtTo = $createdAtTo;

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
