<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\Heartbeat;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class HeartbeatApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * HeartbeatApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Live Encoding Heartbeat
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\LiveEncodingHeartbeat
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\LiveEncodingHeartbeat
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/live/heartbeat', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveEncodingHeartbeat::class);
    }
}
