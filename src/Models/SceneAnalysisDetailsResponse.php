<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SceneAnalysisDetailsResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\Scene[] */
    public $scenes;

    /** @var string */
    public $description;

    /** @var string[] */
    public $keywords;

    /** @var \BitmovinApiSdk\Models\Rating[] */
    public $ratings;

    /** @var string[] */
    public $sensitiveTopics;

    /** @var string[] */
    public $iabSensitiveTopicTaxonomies;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->scenes = ObjectMapper::map($this->scenes, Scene::class);
        $this->ratings = ObjectMapper::map($this->ratings, Rating::class);
    }

    /**
     * scenes
     *
     * @param \BitmovinApiSdk\Models\Scene[] $scenes
     * @return $this
     */
    public function scenes(array $scenes)
    {
        $this->scenes = $scenes;

        return $this;
    }

    /**
     * description
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
     * keywords
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
     * ratings
     *
     * @param \BitmovinApiSdk\Models\Rating[] $ratings
     * @return $this
     */
    public function ratings(array $ratings)
    {
        $this->ratings = $ratings;

        return $this;
    }

    /**
     * sensitiveTopics
     *
     * @param string[] $sensitiveTopics
     * @return $this
     */
    public function sensitiveTopics(array $sensitiveTopics)
    {
        $this->sensitiveTopics = $sensitiveTopics;

        return $this;
    }

    /**
     * iabSensitiveTopicTaxonomies
     *
     * @param string[] $iabSensitiveTopicTaxonomies
     * @return $this
     */
    public function iabSensitiveTopicTaxonomies(array $iabSensitiveTopicTaxonomies)
    {
        $this->iabSensitiveTopicTaxonomies = $iabSensitiveTopicTaxonomies;

        return $this;
    }
}

