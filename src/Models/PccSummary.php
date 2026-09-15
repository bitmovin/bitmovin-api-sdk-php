<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccSummary extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\PccOverview */
    public $overview;

    /** @var \BitmovinApiSdk\Models\PccCodecReach[] */
    public $codecReach;

    /** @var int */
    public $unansweredCombinations;

    /** @var \BitmovinApiSdk\Models\PccVerdictShare[] */
    public $verdicts;

    /** @var \BitmovinApiSdk\Models\PccSupportShare[] */
    public $byCodec;

    /** @var \BitmovinApiSdk\Models\PccSupportShare[] */
    public $byProtection;

    /** @var \BitmovinApiSdk\Models\PccDeviceTypeShare[] */
    public $byDeviceType;

    /** @var \BitmovinApiSdk\Models\PccCombinationEvidence[] */
    public $combinations;

    /** @var \BitmovinApiSdk\Models\PccHdrSummary */
    public $hdr;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->overview = ObjectMapper::map($this->overview, PccOverview::class);
        $this->codecReach = ObjectMapper::map($this->codecReach, PccCodecReach::class);
        $this->verdicts = ObjectMapper::map($this->verdicts, PccVerdictShare::class);
        $this->byCodec = ObjectMapper::map($this->byCodec, PccSupportShare::class);
        $this->byProtection = ObjectMapper::map($this->byProtection, PccSupportShare::class);
        $this->byDeviceType = ObjectMapper::map($this->byDeviceType, PccDeviceTypeShare::class);
        $this->combinations = ObjectMapper::map($this->combinations, PccCombinationEvidence::class);
        $this->hdr = ObjectMapper::map($this->hdr, PccHdrSummary::class);
    }

    /**
     * overview
     *
     * @param \BitmovinApiSdk\Models\PccOverview $overview
     * @return $this
     */
    public function overview(\BitmovinApiSdk\Models\PccOverview $overview)
    {
        $this->overview = $overview;

        return $this;
    }

    /**
     * codecReach
     *
     * @param \BitmovinApiSdk\Models\PccCodecReach[] $codecReach
     * @return $this
     */
    public function codecReach(array $codecReach)
    {
        $this->codecReach = $codecReach;

        return $this;
    }

    /**
     * Selected applicable codec/protection combinations with no device-answering verdict. Declared unsupported and claimed-but-not-played are answers; inapplicable pairings are not gaps. (required)
     *
     * @param int $unansweredCombinations
     * @return $this
     */
    public function unansweredCombinations(int $unansweredCombinations)
    {
        $this->unansweredCombinations = $unansweredCombinations;

        return $this;
    }

    /**
     * verdicts
     *
     * @param \BitmovinApiSdk\Models\PccVerdictShare[] $verdicts
     * @return $this
     */
    public function verdicts(array $verdicts)
    {
        $this->verdicts = $verdicts;

        return $this;
    }

    /**
     * byCodec
     *
     * @param \BitmovinApiSdk\Models\PccSupportShare[] $byCodec
     * @return $this
     */
    public function byCodec(array $byCodec)
    {
        $this->byCodec = $byCodec;

        return $this;
    }

    /**
     * byProtection
     *
     * @param \BitmovinApiSdk\Models\PccSupportShare[] $byProtection
     * @return $this
     */
    public function byProtection(array $byProtection)
    {
        $this->byProtection = $byProtection;

        return $this;
    }

    /**
     * byDeviceType
     *
     * @param \BitmovinApiSdk\Models\PccDeviceTypeShare[] $byDeviceType
     * @return $this
     */
    public function byDeviceType(array $byDeviceType)
    {
        $this->byDeviceType = $byDeviceType;

        return $this;
    }

    /**
     * Every selected combination, with what the selected device pools answered about it. One that several pools claimed and none played points at the stream rather than at the devices. (required)
     *
     * @param \BitmovinApiSdk\Models\PccCombinationEvidence[] $combinations
     * @return $this
     */
    public function combinations(array $combinations)
    {
        $this->combinations = $combinations;

        return $this;
    }

    /**
     * hdr
     *
     * @param \BitmovinApiSdk\Models\PccHdrSummary $hdr
     * @return $this
     */
    public function hdr(\BitmovinApiSdk\Models\PccHdrSummary $hdr)
    {
        $this->hdr = $hdr;

        return $this;
    }
}

