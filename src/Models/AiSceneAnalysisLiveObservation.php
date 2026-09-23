<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisLiveObservation extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $text;

    /** @var float */
    public $startTimeSeconds;

    /** @var float */
    public $endTimeSeconds;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Stable opaque observation ID that remains unchanged across cumulative result generations (required)
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
     * Consumer-visible description of a development in the analyzed media (required)
     *
     * @param string $text
     * @return $this
     */
    public function text(string $text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Start of the analyzed media window that produced the observation (required)
     *
     * @param float $startTimeSeconds
     * @return $this
     */
    public function startTimeSeconds(float $startTimeSeconds)
    {
        $this->startTimeSeconds = $startTimeSeconds;

        return $this;
    }

    /**
     * End of the analyzed media window that produced the observation (required)
     *
     * @param float $endTimeSeconds
     * @return $this
     */
    public function endTimeSeconds(float $endTimeSeconds)
    {
        $this->endTimeSeconds = $endTimeSeconds;

        return $this;
    }
}

