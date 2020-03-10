<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DefaultManifestAttributeCondition extends DefaultManifestCondition
{
    /** @var string */
    public $attribute;

    /** @var ConditionOperator */
    public $operator;

    /** @var string */
    public $value;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->operator = ObjectMapper::map($this->operator, ConditionOperator::class);
    }

    /**
     * The attribute that should be used for the evaluation: - audio.codec - audio.language - audio.bitrate - subtitle.format - subtitle.language - video.height - video.width - video.codec - video.bitrate - drm.type - muxing.type (required)
     *
     * @param string $attribute
     * @return $this
     */
    public function attribute(string $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * The operator that should be used for the evaluation (required)
     *
     * @param ConditionOperator $operator
     * @return $this
     */
    public function operator(ConditionOperator $operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * The value that should be used for comparison. Valid values depend on the attribute: - audio.codec (Enum; e.g., AAC, MP3, OPUS) - audio.language (String) - audio.bitrate (Integer) - subtitle.format (Enum; e.g., WEBVTT) - subtitle.language (String) - video.height (Integer) - video.width (Integer) - video.codec (Enum; e.g., AV1, H264, VP9) - video.bitrate (Integer) - drm.type (Enum; NoDrm, Cenc, CencWidevine, CencPlayReady, CencMarlin, CencFairPlay, Aes128, ClearKey, PrimeTime, Widevine, PlayReady, Marlin, FairPlay) - muxing.type (Enum; e.g., FMP4, MP4) (required)
     *
     * @param string $value
     * @return $this
     */
    public function value(string $value)
    {
        $this->value = $value;

        return $this;
    }
}

