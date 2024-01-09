<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class HlsManifestAdMarkerSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\HlsManifestAdMarkerType[] */
    public $enabledMarkerTypes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->enabledMarkerTypes = ObjectMapper::map($this->enabledMarkerTypes, HlsManifestAdMarkerType::class);
    }

    /**
     * Ad marker types that will be inserted. More than one type is possible.  - EXT_X_CUE_OUT_IN: Ad markers will be inserted using &#x60;#EXT-X-CUE-OUT&#x60; and &#x60;#EXT-X-CUE-IN&#x60; tags - EXT_OATCLS_SCTE35: Ad markers will be inserted using &#x60;#EXT-OATCLS-SCTE35&#x60; tags. They contain the base64 encoded raw bytes of the original SCTE-35 trigger. - EXT_X_SPLICEPOINT_SCTE35: Ad markers will be inserted using &#x60;#EXT-X-SPLICEPOINT-SCTE35&#x60; tags. They contain the base64 encoded raw bytes of the original SCTE-35 trigger.
     *
     * @param \BitmovinApiSdk\Models\HlsManifestAdMarkerType[] $enabledMarkerTypes
     * @return $this
     */
    public function enabledMarkerTypes(array $enabledMarkerTypes)
    {
        $this->enabledMarkerTypes = $enabledMarkerTypes;

        return $this;
    }
}

