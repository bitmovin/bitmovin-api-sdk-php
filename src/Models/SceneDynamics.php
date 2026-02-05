<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SceneDynamics extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var SceneTension */
    public $tension;

    /** @var ScenePacing */
    public $pacing;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->tension = ObjectMapper::map($this->tension, SceneTension::class);
        $this->pacing = ObjectMapper::map($this->pacing, ScenePacing::class);
    }

    /**
     * The detected tension of the scene based on content analysis
     *
     * @param SceneTension $tension
     * @return $this
     */
    public function tension(SceneTension $tension)
    {
        $this->tension = $tension;

        return $this;
    }

    /**
     * The detected pacing of the scene based on content analysis
     *
     * @param ScenePacing $pacing
     * @return $this
     */
    public function pacing(ScenePacing $pacing)
    {
        $this->pacing = $pacing;

        return $this;
    }
}

