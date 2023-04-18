<?php

namespace BitmovinApiSdk\Apis\Streams\Live\Stop;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class StopApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * StopApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Stop live stream by id
     *
     * @param string $streamId
     * @throws BitmovinApiException
     */
    public function update(string $streamId)
    {
        $pathParams = [
            'stream_id' => $streamId,
        ];

        $this->httpWrapper->request('PUT', '/streams/live/{stream_id}/stop', $pathParams,  null, null, false);
    }
}
