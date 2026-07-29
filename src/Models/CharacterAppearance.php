<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CharacterAppearance extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $summary;

    /** @var string */
    public $gender;

    /** @var AgeRange */
    public $approximateAge;

    /** @var string */
    public $hairColor;

    /** @var string */
    public $hairStyle;

    /** @var string */
    public $hairFullness;

    /** @var string */
    public $facialHair;

    /** @var string */
    public $physicalBuild;

    /** @var string */
    public $distinguishingFeatures;

    /** @var string */
    public $clothing;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->approximateAge = ObjectMapper::map($this->approximateAge, AgeRange::class);
    }

    /**
     * summary
     *
     * @param string $summary
     * @return $this
     */
    public function summary(string $summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * gender
     *
     * @param string $gender
     * @return $this
     */
    public function gender(string $gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * The approximate age range of the character
     *
     * @param AgeRange $approximateAge
     * @return $this
     */
    public function approximateAge(AgeRange $approximateAge)
    {
        $this->approximateAge = $approximateAge;

        return $this;
    }

    /**
     * hairColor
     *
     * @param string $hairColor
     * @return $this
     */
    public function hairColor(string $hairColor)
    {
        $this->hairColor = $hairColor;

        return $this;
    }

    /**
     * hairStyle
     *
     * @param string $hairStyle
     * @return $this
     */
    public function hairStyle(string $hairStyle)
    {
        $this->hairStyle = $hairStyle;

        return $this;
    }

    /**
     * hairFullness
     *
     * @param string $hairFullness
     * @return $this
     */
    public function hairFullness(string $hairFullness)
    {
        $this->hairFullness = $hairFullness;

        return $this;
    }

    /**
     * facialHair
     *
     * @param string $facialHair
     * @return $this
     */
    public function facialHair(string $facialHair)
    {
        $this->facialHair = $facialHair;

        return $this;
    }

    /**
     * physicalBuild
     *
     * @param string $physicalBuild
     * @return $this
     */
    public function physicalBuild(string $physicalBuild)
    {
        $this->physicalBuild = $physicalBuild;

        return $this;
    }

    /**
     * distinguishingFeatures
     *
     * @param string $distinguishingFeatures
     * @return $this
     */
    public function distinguishingFeatures(string $distinguishingFeatures)
    {
        $this->distinguishingFeatures = $distinguishingFeatures;

        return $this;
    }

    /**
     * clothing
     *
     * @param string $clothing
     * @return $this
     */
    public function clothing(string $clothing)
    {
        $this->clothing = $clothing;

        return $this;
    }
}

