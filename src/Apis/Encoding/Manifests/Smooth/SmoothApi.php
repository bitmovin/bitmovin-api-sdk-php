<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Smooth;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\DefaultApi\DefaultApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\Representations\RepresentationsApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\Contentprotection\ContentprotectionApi;

class SmoothApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DefaultApi */
    public $default;

    /** @var CustomdataApi */
    public $customdata;

    /** @var RepresentationsApi */
    public $representations;

    /** @var ContentprotectionApi */
    public $contentprotection;

    /**
     * SmoothApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->default = new DefaultApi(null, $this->httpWrapper);
        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->representations = new RepresentationsApi(null, $this->httpWrapper);
        $this->contentprotection = new ContentprotectionApi(null, $this->httpWrapper);
    }

    /**
     * Create Smooth Streaming Manifest
     *
     * @param \BitmovinApiSdk\Models\SmoothStreamingManifest $smoothStreamingManifest
     * @return \BitmovinApiSdk\Models\SmoothStreamingManifest
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\SmoothStreamingManifest $smoothStreamingManifest) : \BitmovinApiSdk\Models\SmoothStreamingManifest
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/manifests/smooth', [],  null, $smoothStreamingManifest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SmoothStreamingManifest::class);
    }

    /**
     * Delete Smooth Streaming Manifest
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
        $response = $this->httpWrapper->request('DELETE','/encoding/manifests/smooth/{manifest_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Smooth Streaming Manifest Details
     *
     * @param string $manifestId
     * @return \BitmovinApiSdk\Models\SmoothStreamingManifest
     * @throws BitmovinApiException
     */
    public function get(string $manifestId) : \BitmovinApiSdk\Models\SmoothStreamingManifest
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/manifests/smooth/{manifest_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SmoothStreamingManifest::class);
    }

    /**
     * List Smooth Streaming Manifests
     *
     * @param SmoothStreamingManifestListQueryParams|null $queryParams
     * @return SmoothStreamingManifestPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(SmoothStreamingManifestListQueryParams $queryParams = null) : SmoothStreamingManifestPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/manifests/smooth', [], $queryParams, null, true);

        return ObjectMapper::map($response, SmoothStreamingManifestPaginationResponse::class);
    }

    /**
     * Start Smooth Streaming Manifest Creation
     *
     * @param string $manifestId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function start(string $manifestId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/manifests/smooth/{manifest_id}/start', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Smooth Streaming Manifest Creation Status
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
        $response = $this->httpWrapper->request('GET','/encoding/manifests/smooth/{manifest_id}/status', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Task::class);
    }

    /**
     * Stop Smooth Streaming Manifest Creation
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
        $response = $this->httpWrapper->request('POST','/encoding/manifests/smooth/{manifest_id}/stop', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }
}
