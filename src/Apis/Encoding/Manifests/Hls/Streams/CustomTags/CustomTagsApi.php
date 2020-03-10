<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Streams\CustomTags;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class CustomTagsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * CustomTagsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Custom Tag to Variant Stream
     *
     * @param string $manifestId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\CustomTag $customTag
     * @return \BitmovinApiSdk\Models\CustomTag
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, string $streamId, \BitmovinApiSdk\Models\CustomTag $customTag) : \BitmovinApiSdk\Models\CustomTag
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/hls/{manifest_id}/streams/{stream_id}/custom-tags', $pathParams,  null, $customTag, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomTag::class);
    }

    /**
     * Delete Custom Tag
     *
     * @param string $manifestId
     * @param string $streamId
     * @param string $customTagId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $manifestId, string $streamId, string $customTagId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'stream_id' => $streamId,
            'custom_tag_id' => $customTagId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/manifests/hls/{manifest_id}/streams/{stream_id}/custom-tags/{custom_tag_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Custom Tag Details
     *
     * @param string $manifestId
     * @param string $streamId
     * @param string $customTagId
     * @return \BitmovinApiSdk\Models\CustomTag
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $streamId, string $customTagId) : \BitmovinApiSdk\Models\CustomTag
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'stream_id' => $streamId,
            'custom_tag_id' => $customTagId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/streams/{stream_id}/custom-tags/{custom_tag_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomTag::class);
    }

    /**
     * List all Custom Tags of a Variant Stream
     *
     * @param string $manifestId
     * @param string $streamId
     * @param CustomTagListQueryParams|null $queryParams
     * @return CustomTagPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $streamId, CustomTagListQueryParams $queryParams = null) : CustomTagPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/streams/{stream_id}/custom-tags', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, CustomTagPaginationResponse::class);
    }
}
