<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Keyframes;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class KeyframesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * KeyframesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create Keyframes
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\Keyframe $keyframe
     * @return \BitmovinApiSdk\Models\Keyframe
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\Keyframe $keyframe) : \BitmovinApiSdk\Models\Keyframe
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/keyframes', $pathParams,  null, $keyframe, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Keyframe::class);
    }

    /**
     * Delete Keyframe
     *
     * @param string $encodingId
     * @param string $keyframeId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $keyframeId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'keyframe_id' => $keyframeId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/keyframes/{keyframe_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Keyframe Details
     *
     * @param string $encodingId
     * @param string $keyframeId
     * @return \BitmovinApiSdk\Models\Keyframe
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $keyframeId) : \BitmovinApiSdk\Models\Keyframe
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'keyframe_id' => $keyframeId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/keyframes/{keyframe_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Keyframe::class);
    }

    /**
     * List all Keyframes
     *
     * @param string $encodingId
     * @param KeyframeListQueryParams|null $queryParams
     * @return KeyframePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, KeyframeListQueryParams $queryParams = null) : KeyframePaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/keyframes', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, KeyframePaginationResponse::class);
    }
}
