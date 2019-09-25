<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Inputs;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class InputsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * InputsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Stream Input Analysis Details
     *
     * @param string $encodingId
     * @param string $streamId
     * @return StreamDetailsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId) : StreamDetailsPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/streams/{stream_id}/inputs', $pathParams,  null, null, true);

        return ObjectMapper::map($response, StreamDetailsPaginationResponse::class);
    }
}
