<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Shot extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $startInSeconds;

    /** @var float */
    public $endInSeconds;

    /** @var string */
    public $detailedDescription;

    /** @var string[] */
    public $keywords;

    /** @var \BitmovinApiSdk\Models\MainSubject[] */
    public $mainSubjects;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->mainSubjects = ObjectMapper::map($this->mainSubjects, MainSubject::class);
    }

    /**
     * The start time of the shot in seconds from the beginning of the video (required)
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
     * The end time of the shot in seconds from the beginning of the video (required)
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
     * A comprehensive textual description of the visual content, action, and context within this shot
     *
     * @param string $detailedDescription
     * @return $this
     */
    public function detailedDescription(string $detailedDescription)
    {
        $this->detailedDescription = $detailedDescription;

        return $this;
    }

    /**
     * A list of relevant keywords and tags that describe the content, themes, or notable elements in this shot
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
     * A collection of the primary subjects or objects detected and tracked within this shot, including their positions and characteristics
     *
     * @param \BitmovinApiSdk\Models\MainSubject[] $mainSubjects
     * @return $this
     */
    public function mainSubjects(array $mainSubjects)
    {
        $this->mainSubjects = $mainSubjects;

        return $this;
    }
}

