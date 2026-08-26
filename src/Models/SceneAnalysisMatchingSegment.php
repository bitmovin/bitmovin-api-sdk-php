<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SceneAnalysisMatchingSegment extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $sceneId;

    /** @var SceneType */
    public $sceneType;

    /** @var string */
    public $sceneTitle;

    /** @var string */
    public $sceneDescription;

    /** @var float */
    public $startInSeconds;

    /** @var float */
    public $endInSeconds;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->sceneType = ObjectMapper::map($this->sceneType, SceneType::class);
    }

    /**
     * ID of the matching scene (required)
     *
     * @param string $sceneId
     * @return $this
     */
    public function sceneId(string $sceneId)
    {
        $this->sceneId = $sceneId;

        return $this;
    }

    /**
     * The detected type of the matching scene
     *
     * @param SceneType $sceneType
     * @return $this
     */
    public function sceneType(SceneType $sceneType)
    {
        $this->sceneType = $sceneType;

        return $this;
    }

    /**
     * The title of the matching scene
     *
     * @param string $sceneTitle
     * @return $this
     */
    public function sceneTitle(string $sceneTitle)
    {
        $this->sceneTitle = $sceneTitle;

        return $this;
    }

    /**
     * A description of the matching scene
     *
     * @param string $sceneDescription
     * @return $this
     */
    public function sceneDescription(string $sceneDescription)
    {
        $this->sceneDescription = $sceneDescription;

        return $this;
    }

    /**
     * The start time of the matching segment in seconds from the beginning of the video (required)
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
     * The end time of the matching segment in seconds from the beginning of the video (required)
     *
     * @param float $endInSeconds
     * @return $this
     */
    public function endInSeconds(float $endInSeconds)
    {
        $this->endInSeconds = $endInSeconds;

        return $this;
    }
}

