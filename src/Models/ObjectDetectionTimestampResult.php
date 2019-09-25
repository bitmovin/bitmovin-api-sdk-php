<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ObjectDetectionTimestampResult extends BitmovinResponse
{
    /** @var float */
    public $timestamp;

    /** @var \BitmovinApiSdk\Models\ObjectDetectionResult[] */
    public $objects;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->objects = ObjectMapper::map($this->objects, ObjectDetectionResult::class);
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
     * Objects detected for the given timestamp
     *
     * @param \BitmovinApiSdk\Models\ObjectDetectionResult[] $objects
     * @return $this
     */
    public function objects(array $objects)
    {
        $this->objects = $objects;

        return $this;
    }
}

