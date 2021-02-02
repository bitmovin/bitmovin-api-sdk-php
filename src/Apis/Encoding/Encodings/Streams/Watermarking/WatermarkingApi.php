<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Watermarking;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Watermarking\NexguardFileMarker\NexguardFileMarkerApi;

class WatermarkingApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var NexguardFileMarkerApi */
    public $nexguardFileMarker;

    /**
     * WatermarkingApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->nexguardFileMarker = new NexguardFileMarkerApi(null, $this->httpWrapper);
    }
}
