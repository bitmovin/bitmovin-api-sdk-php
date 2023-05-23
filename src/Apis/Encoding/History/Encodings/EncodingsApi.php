<?php

namespace BitmovinApiSdk\Apis\Encoding\History\Encodings;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class EncodingsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * EncodingsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * (Experimental) History Encoding Details
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\HistoryEncoding
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\HistoryEncoding
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/history/encodings/{encoding_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HistoryEncoding::class);
    }

    /**
     * (Experimental) List all History Encodings
     *
     * @param EncodingListQueryParams|null $queryParams
     * @return EncodingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(EncodingListQueryParams $queryParams = null) : EncodingPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/history/encodings', [], $queryParams, null, true);

        return ObjectMapper::map($response, EncodingPaginationResponse::class);
    }
}
