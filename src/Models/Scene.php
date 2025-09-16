<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Scene extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $title;

    /** @var float */
    public $startInSeconds;

    /** @var float */
    public $endInSeconds;

    /** @var string */
    public $id;

    /** @var \BitmovinApiSdk\Models\Content */
    public $content;

    /** @var string */
    public $summary;

    /** @var string */
    public $verboseSummary;

    /** @var string[] */
    public $sensitiveTopics;

    /** @var string[] */
    public $keywords;

    /** @var \BitmovinApiSdk\Models\IABTaxonomy */
    public $iab;

    /** @var SceneType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->content = ObjectMapper::map($this->content, Content::class);
        $this->iab = ObjectMapper::map($this->iab, IABTaxonomy::class);
        $this->type = ObjectMapper::map($this->type, SceneType::class);
    }

    /**
     * title
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
     * startInSeconds
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
     * endInSeconds
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
     * id
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
     * content
     *
     * @param \BitmovinApiSdk\Models\Content $content
     * @return $this
     */
    public function content(\BitmovinApiSdk\Models\Content $content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * summary
     *
     * @param string $summary
     * @return $this
     */
    public function summary(string $summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * verboseSummary
     *
     * @param string $verboseSummary
     * @return $this
     */
    public function verboseSummary(string $verboseSummary)
    {
        $this->verboseSummary = $verboseSummary;

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
     * iab
     *
     * @param \BitmovinApiSdk\Models\IABTaxonomy $iab
     * @return $this
     */
    public function iab(\BitmovinApiSdk\Models\IABTaxonomy $iab)
    {
        $this->iab = $iab;

        return $this;
    }

    /**
     * The detected type of scene based on content analysis
     *
     * @param SceneType $type
     * @return $this
     */
    public function type(SceneType $type)
    {
        $this->type = $type;

        return $this;
    }
}

