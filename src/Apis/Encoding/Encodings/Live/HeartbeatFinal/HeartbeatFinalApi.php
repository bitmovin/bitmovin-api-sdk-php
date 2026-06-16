<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\HeartbeatFinal;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class HeartbeatFinalApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * HeartbeatFinalApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Get Final Live Encoding Heartbeat Download URL
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\LiveEncodingHeartbeatUrlResponse
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\LiveEncodingHeartbeatUrlResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/live/heartbeat-final', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveEncodingHeartbeatUrlResponse::class);
    }
}
