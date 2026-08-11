<?php

namespace BitmovinApiSdk\Models;

class SceneAnalysisListSort extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CREATED_AT_DESC = 'createdAt:DESC';

    /** @var string */
    private const CREATED_AT_ASC = 'createdAt:ASC';

    /** @var string */
    private const RELEVANCE_DESC = 'relevance:DESC';

    /**
     * @param string $value
     * @return SceneAnalysisListSort
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Sort by analysis creation date in descending order
     *
     * @return SceneAnalysisListSort
     */
    public static function CREATED_AT_DESC()
    {
        return new SceneAnalysisListSort(self::CREATED_AT_DESC);
    }

    /**
     * Sort by analysis creation date in ascending order
     *
     * @return SceneAnalysisListSort
     */
    public static function CREATED_AT_ASC()
    {
        return new SceneAnalysisListSort(self::CREATED_AT_ASC);
    }

    /**
     * Sort by semantic relevance in descending order. Supported only when searchText contains at least one non-whitespace character
     *
     * @return SceneAnalysisListSort
     */
    public static function RELEVANCE_DESC()
    {
        return new SceneAnalysisListSort(self::RELEVANCE_DESC);
    }
}

