<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\Esam;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Live\Esam\MediaPoints\MediaPointsApi;

class EsamApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var MediaPointsApi */
    public $mediaPoints;

    /**
     * EsamApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->mediaPoints = new MediaPointsApi(null, $this->httpWrapper);
    }
}
