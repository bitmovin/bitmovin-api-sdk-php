<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\DefaultApi;

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
     * Create DASH Manifest Default
     *
     * @param \BitmovinApiSdk\Models\DashManifestDefault $dashManifestDefault
     * @return \BitmovinApiSdk\Models\DashManifestDefault
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DashManifestDefault $dashManifestDefault) : \BitmovinApiSdk\Models\DashManifestDefault
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/manifests/dash/default', [],  null, $dashManifestDefault, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DashManifestDefault::class);
    }
}
