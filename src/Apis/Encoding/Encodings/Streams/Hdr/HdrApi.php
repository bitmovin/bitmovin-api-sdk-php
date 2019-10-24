<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Hdr;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Hdr\DolbyVision\DolbyVisionApi;

class HdrApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DolbyVisionApi */
    public $dolbyVision;

    /**
     * HdrApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->dolbyVision = new DolbyVisionApi(null, $this->httpWrapper);
    }
}
