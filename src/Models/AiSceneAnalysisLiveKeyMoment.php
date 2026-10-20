<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisLiveKeyMoment extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var int */
    public $lastUpdatedSequence;

    /** @var int */
    public $importanceLevel;

    /** @var float */
    public $startInSeconds;

    /** @var float */
    public $endInSeconds;

    /** @var float */
    public $anchorInSeconds;

    /** @var string[] */
    public $observations;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Opaque key moment ID unique within the Live Analysis. Stable through refinements and never reused after withdrawal. (required)
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
     * Result sequence that introduced or last changed this moment&#39;s importance level, times or observation references. Unchanged moments retain this value. (required)
     *
     * @param int $lastUpdatedSequence
     * @return $this
     */
    public function lastUpdatedSequence(int $lastUpdatedSequence)
    {
        $this->lastUpdatedSequence = $lastUpdatedSequence;

        return $this;
    }

    /**
     * Importance level, not a position within the result snapshot: 1 is highest and larger values indicate lower importance. Ties are allowed. Adding another moment does not by itself renumber existing importance levels. There is no upper bound or implied limit on the number of key moments. (required)
     *
     * @param int $importanceLevel
     * @return $this
     */
    public function importanceLevel(int $importanceLevel)
    {
        $this->importanceLevel = $importanceLevel;

        return $this;
    }

    /**
     * Start of the key moment in seconds (required)
     *
     * @param float $startInSeconds
     * @return $this
     */
    public function startInSeconds(float $startInSeconds)
    {
        $this->startInSeconds = $startInSeconds;

        return $this;
    }

    /**
     * End of the key moment in seconds (required)
     *
     * @param float $endInSeconds
     * @return $this
     */
    public function endInSeconds(float $endInSeconds)
    {
        $this->endInSeconds = $endInSeconds;

        return $this;
    }

    /**
     * Time of the key moment&#39;s actual high point in seconds (required)
     *
     * @param float $anchorInSeconds
     * @return $this
     */
    public function anchorInSeconds(float $anchorInSeconds)
    {
        $this->anchorInSeconds = $anchorInSeconds;

        return $this;
    }

    /**
     * IDs of active observations in the enclosing result that support this moment. Multiple key moments may reference the same observation. (required)
     *
     * @param string[] $observations
     * @return $this
     */
    public function observations(array $observations)
    {
        $this->observations = $observations;

        return $this;
    }
}

