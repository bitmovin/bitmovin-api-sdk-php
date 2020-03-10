<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PerTitleFixedResolutionAndBitrateConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $forcedRenditionAboveHighestFixedRepresentation;

    /** @var float */
    public $forcedRenditionAboveHighestFixedRepresentationFactor;

    /** @var PerTitleFixedResolutionAndBitrateConfigurationMode */
    public $forcedRenditionAboveHighestFixedRepresentationCalculationMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->forcedRenditionAboveHighestFixedRepresentationCalculationMode = ObjectMapper::map($this->forcedRenditionAboveHighestFixedRepresentationCalculationMode, PerTitleFixedResolutionAndBitrateConfigurationMode::class);
    }

    /**
     * Number of forced renditions above the highest fixed representation (e.g. FIXED_RESOLUTION_AND_BITRATE). Forced renditions will be added, also if the Per-Title algorithm chooses the user defined force rendition to be the highest one.
     *
     * @param int $forcedRenditionAboveHighestFixedRepresentation
     * @return $this
     */
    public function forcedRenditionAboveHighestFixedRepresentation(int $forcedRenditionAboveHighestFixedRepresentation)
    {
        $this->forcedRenditionAboveHighestFixedRepresentation = $forcedRenditionAboveHighestFixedRepresentation;

        return $this;
    }

    /**
     * The factor to calculate the bitrate that will be chosen based on the bitrate of the last FIXED_RESOLUTION.
     *
     * @param float $forcedRenditionAboveHighestFixedRepresentationFactor
     * @return $this
     */
    public function forcedRenditionAboveHighestFixedRepresentationFactor(float $forcedRenditionAboveHighestFixedRepresentationFactor)
    {
        $this->forcedRenditionAboveHighestFixedRepresentationFactor = $forcedRenditionAboveHighestFixedRepresentationFactor;

        return $this;
    }

    /**
     * Mode to calculate the bitrate of the next representation
     *
     * @param PerTitleFixedResolutionAndBitrateConfigurationMode $forcedRenditionAboveHighestFixedRepresentationCalculationMode
     * @return $this
     */
    public function forcedRenditionAboveHighestFixedRepresentationCalculationMode(PerTitleFixedResolutionAndBitrateConfigurationMode $forcedRenditionAboveHighestFixedRepresentationCalculationMode)
    {
        $this->forcedRenditionAboveHighestFixedRepresentationCalculationMode = $forcedRenditionAboveHighestFixedRepresentationCalculationMode;

        return $this;
    }
}

