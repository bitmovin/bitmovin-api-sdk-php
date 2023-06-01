<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\DefaultApi\DefaultApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Streams\StreamsApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\MediaApi;

class HlsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DefaultApi */
    public $default;

    /** @var CustomdataApi */
    public $customdata;

    /** @var StreamsApi */
    public $streams;

    /** @var MediaApi */
    public $media;

    /**
     * HlsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->default = new DefaultApi(null, $this->httpWrapper);
        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->streams = new StreamsApi(null, $this->httpWrapper);
        $this->media = new MediaApi(null, $this->httpWrapper);
    }

    /**
     * Create Custom HLS Manifest
     *
     * @param \BitmovinApiSdk\Models\HlsManifest $hlsManifest
     * @return \BitmovinApiSdk\Models\HlsManifest
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\HlsManifest $hlsManifest) : \BitmovinApiSdk\Models\HlsManifest
    {
        $response = $this->httpWrapper->request('POST', '/encoding/manifests/hls', [],  null, $hlsManifest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HlsManifest::class);
    }

    /**
     * Delete HLS Manifest
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/manifests/hls/{manifest_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * HLS Manifest Details
     *
     * @param string $manifestId
     * @return \BitmovinApiSdk\Models\HlsManifest
     * @throws BitmovinApiException
     */
    public function get(string $manifestId) : \BitmovinApiSdk\Models\HlsManifest
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HlsManifest::class);
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

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/start', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StartManifestRequest::class);
    }

    /**
     * List HLS Manifests
     *
     * @param HlsManifestListQueryParams|null $queryParams
     * @return HlsManifestPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(HlsManifestListQueryParams $queryParams = null) : HlsManifestPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls', [], $queryParams, null, true);

        return ObjectMapper::map($response, HlsManifestPaginationResponse::class);
    }

    /**
     * Start HLS Manifest Creation
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

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/hls/{manifest_id}/start', $pathParams,  null, $startManifestRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * HLS Manifest Creation Status
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

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/status', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Task::class);
    }

    /**
     * Stop HLS Manifest Creation
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

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/hls/{manifest_id}/stop', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }
}
