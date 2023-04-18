<?php

namespace BitmovinApiSdk\Apis\Streams\Live\Start;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class StartApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * StartApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Start live stream by id
     *
     * @param string $streamId
     * @throws BitmovinApiException
     */
    public function update(string $streamId)
    {
        $pathParams = [
            'stream_id' => $streamId,
        ];

        $this->httpWrapper->request('PUT', '/streams/live/{stream_id}/start', $pathParams,  null, null, false);
    }
}
