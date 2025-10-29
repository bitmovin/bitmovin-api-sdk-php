<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class MainSubject extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $classification;

    /** @var string */
    public $description;

    /** @var float */
    public $appearanceTimeInSeconds;

    /** @var float */
    public $centerX;

    /** @var float */
    public $centerY;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The category or type of the detected subject based on the YOLOv8 OIv7 (Open Images V7) object detection model (e.g., &#39;person&#39;, &#39;vehicle&#39;, &#39;building&#39;) (required)
     *
     * @param string $classification
     * @return $this
     */
    public function classification(string $classification)
    {
        $this->classification = $classification;

        return $this;
    }

    /**
     * A detailed textual description of the subject&#39;s appearance and characteristics (required)
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
     * The timestamp in seconds when this subject first appears or is most prominently visible in the shot (required)
     *
     * @param float $appearanceTimeInSeconds
     * @return $this
     */
    public function appearanceTimeInSeconds(float $appearanceTimeInSeconds)
    {
        $this->appearanceTimeInSeconds = $appearanceTimeInSeconds;

        return $this;
    }

    /**
     * The horizontal center position of the subject as a percentage from the left edge (0-100, where 0 is the left edge and 100 is the right edge) (required)
     *
     * @param float $centerX
     * @return $this
     */
    public function centerX(float $centerX)
    {
        $this->centerX = $centerX;

        return $this;
    }

    /**
     * The vertical center position of the subject as a percentage from the top edge (0-100, where 0 is the top edge and 100 is the bottom edge) (required)
     *
     * @param float $centerY
     * @return $this
     */
    public function centerY(float $centerY)
    {
        $this->centerY = $centerY;

        return $this;
    }
}

