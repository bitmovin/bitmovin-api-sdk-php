<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Sidecar;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Sidecar\DolbyVisionMetadataIngest\DolbyVisionMetadataIngestApi;

class SidecarApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DolbyVisionMetadataIngestApi */
    public $dolbyVisionMetadataIngest;

    /**
     * SidecarApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->dolbyVisionMetadataIngest = new DolbyVisionMetadataIngestApi(null, $this->httpWrapper);
    }
}
