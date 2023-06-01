<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\DefaultApi\DefaultApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\PeriodsApi;

class DashApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DefaultApi */
    public $default;

    /** @var CustomdataApi */
    public $customdata;

    /** @var PeriodsApi */
    public $periods;

    /**
     * DashApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->default = new DefaultApi(null, $this->httpWrapper);
        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->periods = new PeriodsApi(null, $this->httpWrapper);
    }

    /**
     * Create Custom DASH Manifest
     *
     * @param \BitmovinApiSdk\Models\DashManifest $dashManifest
     * @return \BitmovinApiSdk\Models\DashManifest
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DashManifest $dashManifest) : \BitmovinApiSdk\Models\DashManifest
    {
        $response = $this->httpWrapper->request('POST', '/encoding/manifests/dash', [],  null, $dashManifest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DashManifest::class);
    }

    /**
     * Delete DASH Manifest
     *
     * @param string $manifestId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $manifestId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/manifests/dash/{manifest_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * DASH Manifest Details
     *
     * @param string $manifestId
     * @return \BitmovinApiSdk\Models\DashManifest
     * @throws BitmovinApiException
     */
    public function get(string $manifestId) : \BitmovinApiSdk\Models\DashManifest
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DashManifest::class);
    }

    /**
     * Manifest Start Details
     *
     * @param string $manifestId
     * @return \BitmovinApiSdk\Models\StartManifestRequest
     * @throws BitmovinApiException
     */
    public function getStartRequest(string $manifestId) : \BitmovinApiSdk\Models\StartManifestRequest
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/start', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StartManifestRequest::class);
    }

    /**
     * List DASH Manifests
     *
     * @param DashManifestListQueryParams|null $queryParams
     * @return DashManifestPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DashManifestListQueryParams $queryParams = null) : DashManifestPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash', [], $queryParams, null, true);

        return ObjectMapper::map($response, DashManifestPaginationResponse::class);
    }

    /**
     * Start DASH Manifest Creation
     *
     * @param string $manifestId
     * @param \BitmovinApiSdk\Models\StartManifestRequest $startManifestRequest
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function start(string $manifestId, \BitmovinApiSdk\Models\StartManifestRequest $startManifestRequest = null) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/dash/{manifest_id}/start', $pathParams,  null, $startManifestRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * DASH Manifest Creation Status
     *
     * @param string $manifestId
     * @return \BitmovinApiSdk\Models\Task
     * @throws BitmovinApiException
     */
    public function status(string $manifestId) : \BitmovinApiSdk\Models\Task
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/status', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Task::class);
    }

    /**
     * Stop DASH Manifest Creation
     *
     * @param string $manifestId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function stop(string $manifestId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/dash/{manifest_id}/stop', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }
}
