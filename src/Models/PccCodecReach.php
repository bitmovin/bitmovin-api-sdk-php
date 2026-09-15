<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccCodecReach extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $codec;

    /** @var \BitmovinApiSdk\Models\PccCodecDeviceTypeReach[] */
    public $byDeviceType;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->byDeviceType = ObjectMapper::map($this->byDeviceType, PccCodecDeviceTypeReach::class);
    }

    /**
     * codec
     *
     * @param string $codec
     * @return $this
     */
    public function codec(string $codec)
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * byDeviceType
     *
     * @param \BitmovinApiSdk\Models\PccCodecDeviceTypeReach[] $byDeviceType
     * @return $this
     */
    public function byDeviceType(array $byDeviceType)
    {
        $this->byDeviceType = $byDeviceType;

        return $this;
    }
}

