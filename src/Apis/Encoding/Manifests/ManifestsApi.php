<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Type\TypeApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\DashApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\HlsApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\SmoothApi;

class ManifestsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var TypeApi */
    public $type;

    /** @var DashApi */
    public $dash;

    /** @var HlsApi */
    public $hls;

    /** @var SmoothApi */
    public $smooth;

    /**
     * ManifestsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->type = new TypeApi(null, $this->httpWrapper);
        $this->dash = new DashApi(null, $this->httpWrapper);
        $this->hls = new HlsApi(null, $this->httpWrapper);
        $this->smooth = new SmoothApi(null, $this->httpWrapper);
    }

    /**
     * List all Manifests
     *
     * @param ManifestListQueryParams|null $queryParams
     * @return ManifestPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(ManifestListQueryParams $queryParams = null) : ManifestPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/manifests', [], $queryParams, null, true);

        return ObjectMapper::map($response, ManifestPaginationResponse::class);
    }
}
