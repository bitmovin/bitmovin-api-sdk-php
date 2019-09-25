<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\DefaultApi;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class DefaultApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DefaultApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create Smooth Streaming Manifest Default
     *
     * @param \BitmovinApiSdk\Models\SmoothManifestDefault $smoothManifestDefault
     * @return \BitmovinApiSdk\Models\SmoothManifestDefault
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\SmoothManifestDefault $smoothManifestDefault) : \BitmovinApiSdk\Models\SmoothManifestDefault
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/manifests/smooth/default', [],  null, $smoothManifestDefault, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SmoothManifestDefault::class);
    }
}
