<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AudioGroupConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var VariantStreamDroppingMode */
    public $droppingMode;

    /** @var \BitmovinApiSdk\Models\AudioGroup[] */
    public $groups;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->droppingMode = ObjectMapper::map($this->droppingMode, VariantStreamDroppingMode::class);
        $this->groups = ObjectMapper::map($this->groups, AudioGroup::class);
    }

    /**
     * Dropping mode (required)
     *
     * @param VariantStreamDroppingMode $droppingMode
     * @return $this
     */
    public function droppingMode(VariantStreamDroppingMode $droppingMode)
    {
        $this->droppingMode = $droppingMode;

        return $this;
    }

    /**
     * Audio groups (required)
     *
     * @param \BitmovinApiSdk\Models\AudioGroup[] $groups
     * @return $this
     */
    public function groups(array $groups)
    {
        $this->groups = $groups;

        return $this;
    }
}

