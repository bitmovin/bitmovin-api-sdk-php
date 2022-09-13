<?php

namespace BitmovinApiSdk\Apis\Streams;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class StreamsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * StreamsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create new Stream
     *
     * @param \BitmovinApiSdk\Models\CreateBitmovinStreamRequest $createBitmovinStreamRequest
     * @return \BitmovinApiSdk\Models\BitmovinStreamResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\CreateBitmovinStreamRequest $createBitmovinStreamRequest) : \BitmovinApiSdk\Models\BitmovinStreamResponse
    {
        $response = $this->httpWrapper->request('POST', '/streams', [],  null, $createBitmovinStreamRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinStreamResponse::class);
    }

    /**
     * Get Stream by id
     *
     * @param string $streamId
     * @return \BitmovinApiSdk\Models\BitmovinStreamResponse
     * @throws BitmovinApiException
     */
    public function get(string $streamId) : \BitmovinApiSdk\Models\BitmovinStreamResponse
    {
        $pathParams = [
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/streams/{stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinStreamResponse::class);
    }

    /**
     * Get paginated list of Streams
     *
     * @param BitmovinStreamResponseListQueryParams|null $queryParams
     * @return BitmovinStreamResponsePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(BitmovinStreamResponseListQueryParams $queryParams = null) : BitmovinStreamResponsePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/streams', [], $queryParams, null, true);

        return ObjectMapper::map($response, BitmovinStreamResponsePaginationResponse::class);
    }

    /**
     * Update Stream by id
     *
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\UpdateBitmovinStreamRequest $updateBitmovinStreamRequest
     * @return \BitmovinApiSdk\Models\BitmovinStreamResponse
     * @throws BitmovinApiException
     */
    public function patchBitmovinStreamsStreamsByStreamId(string $streamId, \BitmovinApiSdk\Models\UpdateBitmovinStreamRequest $updateBitmovinStreamRequest) : \BitmovinApiSdk\Models\BitmovinStreamResponse
    {
        $pathParams = [
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('PATCH', '/streams/{stream_id}', $pathParams,  null, $updateBitmovinStreamRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinStreamResponse::class);
    }
}
