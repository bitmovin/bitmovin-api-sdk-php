<?php

namespace BitmovinApiSdk\Apis\Streams\Video;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class VideoApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * VideoApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create new Streams video
     *
     * @param \BitmovinApiSdk\Models\StreamsVideoCreateRequest $streamsVideoCreateRequest
     * @return \BitmovinApiSdk\Models\StreamsVideoResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\StreamsVideoCreateRequest $streamsVideoCreateRequest) : \BitmovinApiSdk\Models\StreamsVideoResponse
    {
        $response = $this->httpWrapper->request('POST', '/streams/video', [],  null, $streamsVideoCreateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsVideoResponse::class);
    }

    /**
     * Delete Stream
     *
     * @param string $streamId
     * @throws BitmovinApiException
     */
    public function delete(string $streamId)
    {
        $pathParams = [
            'stream_id' => $streamId,
        ];

        $this->httpWrapper->request('DELETE', '/streams/video/{stream_id}', $pathParams,  null, null, false);
    }

    /**
     * Get Streams video by id
     *
     * @param string $streamId
     * @return \BitmovinApiSdk\Models\StreamsVideoResponse
     * @throws BitmovinApiException
     */
    public function get(string $streamId) : \BitmovinApiSdk\Models\StreamsVideoResponse
    {
        $pathParams = [
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/streams/video/{stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsVideoResponse::class);
    }

    /**
     * Get paginated list of Streams videos
     *
     * @param StreamsVideoResponseListQueryParams|null $queryParams
     * @return StreamsVideoResponsePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(StreamsVideoResponseListQueryParams $queryParams = null) : StreamsVideoResponsePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/streams/video', [], $queryParams, null, true);

        return ObjectMapper::map($response, StreamsVideoResponsePaginationResponse::class);
    }

    /**
     * Partially update video stream by id
     *
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\StreamsVideoUpdateRequest $streamsVideoUpdateRequest
     * @return \BitmovinApiSdk\Models\StreamsVideoResponse
     * @throws BitmovinApiException
     */
    public function patchStreamsVideo(string $streamId, \BitmovinApiSdk\Models\StreamsVideoUpdateRequest $streamsVideoUpdateRequest) : \BitmovinApiSdk\Models\StreamsVideoResponse
    {
        $pathParams = [
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('PATCH', '/streams/video/{stream_id}', $pathParams,  null, $streamsVideoUpdateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsVideoResponse::class);
    }
}
