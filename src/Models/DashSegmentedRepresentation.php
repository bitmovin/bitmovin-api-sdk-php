<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashSegmentedRepresentation extends DashMuxingRepresentation
{
    /** @var DashRepresentationType */
    public $type;

    /** @var DashRepresentationTypeMode */
    public $mode;

    /** @var string */
    public $segmentPath;

    /** @var int */
    public $startSegmentNumber;

    /** @var int */
    public $endSegmentNumber;

    /** @var string */
    public $startKeyframeId;

    /** @var string */
    public $endKeyframeId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, DashRepresentationType::class);
        $this->mode = ObjectMapper::map($this->mode, DashRepresentationTypeMode::class);
    }

    /**
     * type
     *
     * @param DashRepresentationType $type
     * @return $this
     */
    public function type(DashRepresentationType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * mode
     *
     * @param DashRepresentationTypeMode $mode
     * @return $this
     */
    public function mode(DashRepresentationTypeMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Path to segments. Will be used as the representation id if the type is set to TEMPLATE_ADAPTATION_SET (required)
     *
     * @param string $segmentPath
     * @return $this
     */
    public function segmentPath(string $segmentPath)
    {
        $this->segmentPath = $segmentPath;

        return $this;
    }

    /**
     * Number of the first segment
     *
     * @param int $startSegmentNumber
     * @return $this
     */
    public function startSegmentNumber(int $startSegmentNumber)
    {
        $this->startSegmentNumber = $startSegmentNumber;

        return $this;
    }

    /**
     * Number of the last segment. Default is the last one that was encoded
     *
     * @param int $endSegmentNumber
     * @return $this
     */
    public function endSegmentNumber(int $endSegmentNumber)
    {
        $this->endSegmentNumber = $endSegmentNumber;

        return $this;
    }

    /**
     * Id of the keyframe to start with. It takes precedence over startSegmentNumber
     *
     * @param string $startKeyframeId
     * @return $this
     */
    public function startKeyframeId(string $startKeyframeId)
    {
        $this->startKeyframeId = $startKeyframeId;

        return $this;
    }

    /**
     * Id of the keyframe to end with. It takes precedence over endSegmentNumber. The segment containing the end keyframe is not included in the representation.
     *
     * @param string $endKeyframeId
     * @return $this
     */
    public function endKeyframeId(string $endKeyframeId)
    {
        $this->endKeyframeId = $endKeyframeId;

        return $this;
    }
}

