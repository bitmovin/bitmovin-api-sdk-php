<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class H265V2RateControlModeConfig extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var H265V2RateControlModeConfigType */
    public $type;

    public static $discriminatorName = "type";
    public static $discriminatorMapping = [
        "PERCEPTUAL_QUALITY_MODE" => H265V2PerceptualQualityModeConfig::class,
        "CONSTANT_BITRATE_MODE" => H265V2ConstantBitrateModeConfig::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, H265V2RateControlModeConfigType::class);
    }

    /**
     * type
     *
     * @param H265V2RateControlModeConfigType $type
     * @return $this
     */
    public function type(H265V2RateControlModeConfigType $type)
    {
        $this->type = $type;

        return $this;
    }
}

