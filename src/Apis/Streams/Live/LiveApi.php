<?php

namespace BitmovinApiSdk\Apis\Streams\Live;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Streams\Live\Stop\StopApi;
use BitmovinApiSdk\Apis\Streams\Live\Start\StartApi;

class LiveApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var StopApi */
    public $stop;

    /** @var StartApi */
    public $start;

    /**
     * LiveApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->stop = new StopApi(null, $this->httpWrapper);
        $this->start = new StartApi(null, $this->httpWrapper);
    }

    /**
     * Create new live stream
     *
     * @param \BitmovinApiSdk\Models\StreamsLiveCreateRequest $streamsLiveCreateRequest
     * @return \BitmovinApiSdk\Models\StreamsLiveResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\StreamsLiveCreateRequest $streamsLiveCreateRequest) : \BitmovinApiSdk\Models\StreamsLiveResponse
    {
        $response = $this->httpWrapper->request('POST', '/streams/live', [],  null, $streamsLiveCreateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsLiveResponse::class);
    }

    /**
     * Get live stream by id
     *
     * @param string $streamId
     * @return \BitmovinApiSdk\Models\StreamsLiveResponse
     * @throws BitmovinApiException
     */
    public function get(string $streamId) : \BitmovinApiSdk\Models\StreamsLiveResponse
    {
        $pathParams = [
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/streams/live/{stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsLiveResponse::class);
    }

    /**
     * Get paginated list of live streams
     *
     * @param StreamsLiveResponseListQueryParams|null $queryParams
     * @return StreamsLiveResponsePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(StreamsLiveResponseListQueryParams $queryParams = null) : StreamsLiveResponsePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/streams/live', [], $queryParams, null, true);

        return ObjectMapper::map($response, StreamsLiveResponsePaginationResponse::class);
    }

    /**
     * Partially update live stream by id
     *
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\StreamsLiveUpdateRequest $streamsLiveUpdateRequest
     * @return \BitmovinApiSdk\Models\StreamsLiveResponse
     * @throws BitmovinApiException
     */
    public function patchStreamsLive(string $streamId, \BitmovinApiSdk\Models\StreamsLiveUpdateRequest $streamsLiveUpdateRequest) : \BitmovinApiSdk\Models\StreamsLiveResponse
    {
        $pathParams = [
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('PATCH', '/streams/live/{stream_id}', $pathParams,  null, $streamsLiveUpdateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsLiveResponse::class);
    }

    /**
     * Update live stream by id
     *
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\StreamsLiveUpdateRequest $streamsLiveUpdateRequest
     * @return \BitmovinApiSdk\Models\StreamsLiveResponse
     * @throws BitmovinApiException
     */
    public function update(string $streamId, \BitmovinApiSdk\Models\StreamsLiveUpdateRequest $streamsLiveUpdateRequest) : \BitmovinApiSdk\Models\StreamsLiveResponse
    {
        $pathParams = [
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('PUT', '/streams/live/{stream_id}', $pathParams,  null, $streamsLiveUpdateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsLiveResponse::class);
    }
}
