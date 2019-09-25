<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ObjectDetectionResult extends BitmovinResponse
{
    /** @var string */
    public $detectedObject;

    /** @var float */
    public $timestamp;

    /** @var float */
    public $score;

    /** @var ObjectDetectionBoundingBox */
    public $boundingBox;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->boundingBox = ObjectMapper::map($this->boundingBox, ObjectDetectionBoundingBox::class);
    }

    /**
     * Name of the object that has been detected (in English)
     *
     * @param string $detectedObject
     * @return $this
     */
    public function detectedObject(string $detectedObject)
    {
        $this->detectedObject = $detectedObject;

        return $this;
    }

    /**
     * Time in seconds where the object was detected in the video
     *
     * @param float $timestamp
     * @return $this
     */
    public function timestamp(float $timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * A number between 0 and 1 indicating the confidence of the detection
     *
     * @param float $score
     * @return $this
     */
    public function score(float $score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * A box indicating the position and size of the detected object within the frame
     *
     * @param ObjectDetectionBoundingBox $boundingBox
     * @return $this
     */
    public function boundingBox(ObjectDetectionBoundingBox $boundingBox)
    {
        $this->boundingBox = $boundingBox;

        return $this;
    }
}

