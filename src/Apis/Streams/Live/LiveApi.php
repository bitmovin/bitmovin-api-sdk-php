<?php

namespace BitmovinApiSdk\Apis\Streams\Live;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class LiveApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * LiveApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Update stream by id
     *
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\StreamsLiveUpdateRequest $streamsLiveUpdateRequest
     * @return \BitmovinApiSdk\Models\StreamsLiveUpdateRequest
     * @throws BitmovinApiException
     */
    public function patchStreamsLive(string $streamId, \BitmovinApiSdk\Models\StreamsLiveUpdateRequest $streamsLiveUpdateRequest) : \BitmovinApiSdk\Models\StreamsLiveUpdateRequest
    {
        $pathParams = [
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('PATCH', '/streams/live/{stream_id}', $pathParams,  null, $streamsLiveUpdateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsLiveUpdateRequest::class);
    }
}
