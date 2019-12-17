<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PlayReadyAdditionalInformation extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $wrmHeaderCustomAttributes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Custom attributes that you want to add to the WRM header. This string must be valid xml. Some DRM providers require some information in the custom attributes of the msr:pro tag of the DASH manifest, otherwise the content does not play on certain devices.
     *
     * @param string $wrmHeaderCustomAttributes
     * @return $this
     */
    public function wrmHeaderCustomAttributes(string $wrmHeaderCustomAttributes)
    {
        $this->wrmHeaderCustomAttributes = $wrmHeaderCustomAttributes;

        return $this;
    }
}

