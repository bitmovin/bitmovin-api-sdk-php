<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PerTitleConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $minBitrate;

    /** @var int */
    public $maxBitrate;

    /** @var float */
    public $minBitrateStepSize;

    /** @var float */
    public $maxBitrateStepSize;

    /** @var AutoRepresentation */
    public $autoRepresentations;

    /** @var float */
    public $complexityFactor;

    /** @var PerTitleFixedResolutionAndBitrateConfiguration */
    public $fixedResolutionAndBitrateConfiguration;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->autoRepresentations = ObjectMapper::map($this->autoRepresentations, AutoRepresentation::class);
        $this->fixedResolutionAndBitrateConfiguration = ObjectMapper::map($this->fixedResolutionAndBitrateConfiguration, PerTitleFixedResolutionAndBitrateConfiguration::class);
    }

    /**
     * The minimum bitrate that will be used by the Per-Title algorithm.
     *
     * @param int $minBitrate
     * @return $this
     */
    public function minBitrate(int $minBitrate)
    {
        $this->minBitrate = $minBitrate;

        return $this;
    }

    /**
     * The maximum bitrate that will be used by the Per-Title algorithm. It will not generate any rendition with a higher bitrate.
     *
     * @param int $maxBitrate
     * @return $this
     */
    public function maxBitrate(int $maxBitrate)
    {
        $this->maxBitrate = $maxBitrate;

        return $this;
    }

    /**
     * The minimum ratio between the bitrates of generated renditions, e.g. if the first bitrate is 240,000, a minimum ratio of 1.5 will require the next higher bitrate to be at least 360,000
     *
     * @param float $minBitrateStepSize
     * @return $this
     */
    public function minBitrateStepSize(float $minBitrateStepSize)
    {
        $this->minBitrateStepSize = $minBitrateStepSize;

        return $this;
    }

    /**
     * The maximum ratio between the bitrates of neighbouring renditions, e.g., if the first bitrate is 240,000, a maximum ratio of 1.5 will require the next higher bitrate to be at most 360,000
     *
     * @param float $maxBitrateStepSize
     * @return $this
     */
    public function maxBitrateStepSize(float $maxBitrateStepSize)
    {
        $this->maxBitrateStepSize = $maxBitrateStepSize;

        return $this;
    }

    /**
     * autoRepresentations
     *
     * @param AutoRepresentation $autoRepresentations
     * @return $this
     */
    public function autoRepresentations(AutoRepresentation $autoRepresentations)
    {
        $this->autoRepresentations = $autoRepresentations;

        return $this;
    }

    /**
     * Will modify the assumed complexity for the Per-Title algorithm (&gt; 0.0). Values higher than 1 will increase complexity and thus select smaller resolutions for given bitrates. This will also result in a higher bitrate for the top rendition. Values lower than 1 will decrease assumed complexity and thus select higher resolutions for given bitrates and also decrease the bitrate of the top rendition
     *
     * @param float $complexityFactor
     * @return $this
     */
    public function complexityFactor(float $complexityFactor)
    {
        $this->complexityFactor = $complexityFactor;

        return $this;
    }

    /**
     * Additional configuration for fixed resolution and bitrate templates
     *
     * @param PerTitleFixedResolutionAndBitrateConfiguration $fixedResolutionAndBitrateConfiguration
     * @return $this
     */
    public function fixedResolutionAndBitrateConfiguration(PerTitleFixedResolutionAndBitrateConfiguration $fixedResolutionAndBitrateConfiguration)
    {
        $this->fixedResolutionAndBitrateConfiguration = $fixedResolutionAndBitrateConfiguration;

        return $this;
    }
}

