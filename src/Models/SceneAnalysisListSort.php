<?php

namespace BitmovinApiSdk\Models;

class SceneAnalysisListSort extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CREATED_AT_DESC = 'createdAt:DESC';

    /** @var string */
    private const CREATED_AT_ASC = 'createdAt:ASC';

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
}

