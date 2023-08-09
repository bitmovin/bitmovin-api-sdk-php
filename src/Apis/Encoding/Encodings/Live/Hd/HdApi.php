<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\Hd;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class HdApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * HdApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Live Encoding Start Details
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\StartLiveChannelEncodingRequest
     * @throws BitmovinApiException
     */
    public function getStartRequest(string $encodingId) : \BitmovinApiSdk\Models\StartLiveChannelEncodingRequest
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/live/hd/start', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StartLiveChannelEncodingRequest::class);
    }

    /**
     * Start HD Options Live Encoding
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\StartLiveChannelEncodingRequest $startLiveChannelEncodingRequest
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function start(string $encodingId, \BitmovinApiSdk\Models\StartLiveChannelEncodingRequest $startLiveChannelEncodingRequest) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/live/hd/start', $pathParams,  null, $startLiveChannelEncodingRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }
}
