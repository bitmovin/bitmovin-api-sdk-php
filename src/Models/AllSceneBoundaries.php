<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AllSceneBoundaries extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var bool */
    public $isEnabled;

    /** @var bool */
    public $insertCueTags;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * If true, a keyframe (IDR frame) is placed at every detected scene boundary, enabling clean segment cuts aligned with scene changes.
     *
     * @param bool $isEnabled
     * @return $this
     */
    public function isEnabled(bool $isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * If true, cue tags are inserted at every scene boundary in addition to keyframes.
     *
     * @param bool $insertCueTags
     * @return $this
     */
    public function insertCueTags(bool $insertCueTags)
    {
        $this->insertCueTags = $insertCueTags;

        return $this;
    }
}

