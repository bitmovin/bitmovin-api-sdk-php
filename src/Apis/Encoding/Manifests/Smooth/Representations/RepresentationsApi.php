<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\Representations;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\Representations\Mp4\Mp4Api;

class RepresentationsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var Mp4Api */
    public $mp4;

    /**
     * RepresentationsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->mp4 = new Mp4Api(null, $this->httpWrapper);
    }
}
