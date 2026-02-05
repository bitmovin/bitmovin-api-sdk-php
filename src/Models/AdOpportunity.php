<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AdOpportunity extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $reason;

    /** @var float */
    public $score;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The reason why the scene was rated with a certain score
     *
     * @param string $reason
     * @return $this
     */
    public function reason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Score from 0.0 to 1.0 rating the ad placement suitability at the end of a scene based on content analysis
     *
     * @param float $score
     * @return $this
     */
    public function score(float $score)
    {
        $this->score = $score;

        return $this;
    }
}

