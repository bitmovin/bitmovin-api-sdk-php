<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\DefaultApi;

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
     * Create HLS Manifest Default
     *
     * @param \BitmovinApiSdk\Models\HlsManifestDefault $hlsManifestDefault
     * @return \BitmovinApiSdk\Models\HlsManifestDefault
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\HlsManifestDefault $hlsManifestDefault) : \BitmovinApiSdk\Models\HlsManifestDefault
    {
        $response = $this->httpWrapper->request('POST', '/encoding/manifests/hls/default', [],  null, $hlsManifestDefault, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HlsManifestDefault::class);
    }
}
