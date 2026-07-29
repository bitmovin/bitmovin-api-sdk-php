<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SceneAnalysisListItem extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $encodingId;

    /** @var Carbon */
    public $createdAt;

    /** @var string */
    public $description;

    /** @var string */
    public $title;

    /** @var string[] */
    public $keywords;

    /** @var int */
    public $sceneCount;

    /** @var string[] */
    public $outputLanguageCodes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
    }

    /**
     * AI scene analysis ID (required)
     *
     * @param string $id
     * @return $this
     */
    public function id(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * ID of the associated encoding (required)
     *
     * @param string $encodingId
     * @return $this
     */
    public function encodingId(string $encodingId)
    {
        $this->encodingId = $encodingId;

        return $this;
    }

    /**
     * Creation timestamp, returned as UTC in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ (required)
     *
     * @param Carbon $createdAt
     * @return $this
     */
    public function createdAt(Carbon $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Analysis description. Empty when analysis metadata is unavailable (required)
     *
     * @param string $description
     * @return $this
     */
    public function description(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Inferred title representing the analyzed content as a whole. If omitted or null, the title is not available.
     *
     * @param string $title
     * @return $this
     */
    public function title(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Analysis keywords in their original order and casing, including duplicates. Omitted or empty when analysis metadata is unavailable; consumers must treat both representations as an empty list
     *
     * @param string[] $keywords
     * @return $this
     */
    public function keywords(array $keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Number of scenes in the analysis. Zero when analysis metadata is unavailable (required)
     *
     * @param int $sceneCount
     * @return $this
     */
    public function sceneCount(int $sceneCount)
    {
        $this->sceneCount = $sceneCount;

        return $this;
    }

    /**
     * Unique language codes for available translated analysis details in backend-defined deterministic order. Order and casing are returned unchanged. Omitted or empty when no translations are available; consumers must treat both representations as an empty list
     *
     * @param string[] $outputLanguageCodes
     * @return $this
     */
    public function outputLanguageCodes(array $outputLanguageCodes)
    {
        $this->outputLanguageCodes = $outputLanguageCodes;

        return $this;
    }
}

