<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Streams;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Streams\CustomTags\CustomTagsApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Streams\Iframe\IframeApi;

class StreamsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomTagsApi */
    public $customTags;

    /** @var IframeApi */
    public $iframe;

    /**
     * StreamsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customTags = new CustomTagsApi(null, $this->httpWrapper);
        $this->iframe = new IframeApi(null, $this->httpWrapper);
    }

    /**
     * Add Variant Stream
     *
     * @param string $manifestId
     * @param \BitmovinApiSdk\Models\StreamInfo $streamInfo
     * @return \BitmovinApiSdk\Models\StreamInfo
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, \BitmovinApiSdk\Models\StreamInfo $streamInfo) : \BitmovinApiSdk\Models\StreamInfo
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/hls/{manifest_id}/streams', $pathParams,  null, $streamInfo, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamInfo::class);
    }

    /**
     * Delete Variant Stream
     *
     * @param string $manifestId
     * @param string $streamId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $manifestId, string $streamId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/manifests/hls/{manifest_id}/streams/{stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Variant Stream Details
     *
     * @param string $manifestId
     * @param string $streamId
     * @return \BitmovinApiSdk\Models\StreamInfo
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $streamId) : \BitmovinApiSdk\Models\StreamInfo
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/streams/{stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamInfo::class);
    }

    /**
     * List all Variant Streams
     *
     * @param string $manifestId
     * @param StreamInfoListQueryParams|null $queryParams
     * @return StreamInfoPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, StreamInfoListQueryParams $queryParams = null) : StreamInfoPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/streams', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, StreamInfoPaginationResponse::class);
    }
}
