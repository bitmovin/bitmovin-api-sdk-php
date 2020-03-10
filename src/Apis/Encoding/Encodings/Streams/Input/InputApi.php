<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Input;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class InputApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * InputApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Stream Input Details
     *
     * @param string $encodingId
     * @param string $streamId
     * @return \BitmovinApiSdk\Models\EncodingStreamInputDetails
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId) : \BitmovinApiSdk\Models\EncodingStreamInputDetails
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/input', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\EncodingStreamInputDetails::class);
    }
}
